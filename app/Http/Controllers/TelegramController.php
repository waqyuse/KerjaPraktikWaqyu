<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function sendMessage()
    {
        $telegramBotToken = env('6680066184:AAGk-34ijvMNntHXFTcwFc-96fPFskcRkBk');

        // Gunakan token untuk berinteraksi dengan API Telegram
        Telegram::bot($telegramBotToken)->sendMessage([
            'chat_id' => '@Nakhodakonveksi_bot',
            'text' => 'Hello, this is a test message from your Laravel app!',
        ]);

        return response()->json(['message' => 'Message sent successfully']);
    }
}
