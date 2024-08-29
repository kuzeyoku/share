<?php

namespace App\Services\Admin;

use App\Models\Message;
use App\Enums\ModuleEnum;
use App\Enums\StatusEnum;
use App\Mail\Admin\ReplyMessage;
use App\Models\BlockedUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class MessageService extends BaseService
{
    public function __construct(Message $message)
    {
        parent::__construct($message, ModuleEnum::Message);
    }

    public function messageRead(Model $message)
    {
        $message->status = StatusEnum::Read->value;
        $message->save();
    }

    public function sendReply($request, Model $message)
    {
        Mail::to($message->email)->send(new ReplyMessage($request, $message));
        $message->status = StatusEnum::Answered->value;
        $message->save();
    }

    public function block(Model $message)
    {
        BlockedUser::create([
            'email' => $message->email,
            'ip' => $message->ip
        ]);
        $message->delete();
    }

    public function getBlocked()
    {
        return BlockedUser::paginate(config("pagination.admin", 15));
    }
}
