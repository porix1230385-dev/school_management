<?php

namespace App\Http\Controllers\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\User as UserModel;
// use App\User;

class MisterFoloBot extends Controller
{
    public static bool $is_online = false;
    private string $bot_token = 'Bearer xoxb-3284169696583-3301146237812-IY5IcVpcnGhdFCjNZj7otgiM';
    private array $endPoints = [
        'channels' => 'https://slack.com/api/conversations.list',
        'sendMessage' => 'https://slack.com/api/chat.postMessage',
    ];

    // Testing bot
    public function test()
    {
        // get & selecting bot channel
        $channels = $this->getChannels();
        if ($channels['ok']) {
            // get bot channel id
            $bot_channel_id = $channels['channels'][1]['id'];
            // send log message
            $message = $this->sendMessage($bot_channel_id, "Mister FOLO est opérationnel !");
            return $message;
        } else {
            return "Désolé, il y'a un petit soucis technique. Je n'ai pas pu récupérer les canaux de discussion.";
        }
        // dd($channels);
        return $channels;
    }

    // Get conversations list
    public function getChannels()
    {
        if (MisterFoloBot::$is_online) {
            $headers = [
                'Authorization' => $this->bot_token,
            ];
            // sending request...
            $response = Http::withHeaders($headers)->post($this->endPoints['channels']);
            // get results
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            $responseBody['called_function'] = 'getChannels';

            // visualize response
            //dd($responseBody);
            return $responseBody;
        }
    }

    // ANCHOR Sending message to a specify channel
    public function sendMessage(string $channel_id = null, string $msg = "Oups ! J'ai envoyé un message par erreur")
    {
        if (MisterFoloBot::$is_online) {
            $headers = [
                'Content-type' => 'application/json',
                'Authorization' => $this->bot_token,
            ];

            $body = [
                // select by default [bot] channel if channel_id isn't given
                'channel' => $channel_id != null ? $channel_id : $this->getChannels()['channels'][1]['id'],
                'text' => $msg,
            ];

            $response = Http::withHeaders($headers)->post($this->endPoints['sendMessage'], $body);

            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            $responseBody['called_function'] = 'sendMessage';

            // dd($responseBody);
            return $responseBody;
        }
    }

    // Send message when a user is online
    public function logUserLogin(UserModel $user)
    {
        if (MisterFoloBot::$is_online)
            $this->sendMessage(null, "L'utilisateur " . $user->name . " vient de se connecter sur une machine d'adresse ip " . $user->last_login_ip);
    }

    // Send message when a user is loging out
    public function logUserLogout(UserModel $user)
    {
        if (MisterFoloBot::$is_online)
            $this->sendMessage(null, "L'utilisateur " . $user->name . " vient de se déconnecter de la machine d'adresse ip " . $user->last_login_ip);
    }
}
