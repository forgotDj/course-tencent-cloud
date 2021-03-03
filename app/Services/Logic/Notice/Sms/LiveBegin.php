<?php

namespace App\Services\Logic\Notice\Sms;

use App\Models\User as UserModel;
use App\Repos\Account as AccountRepo;
use App\Services\Smser;

class LiveBegin extends Smser
{

    protected $templateCode = 'live_begin';

    /**
     * @param UserModel $user
     * @param array $params
     * @return bool|null
     */
    public function handle(UserModel $user, array $params)
    {
        $params['live']['start_time'] = date('H:i', $params['live']['start_time']);

        $accountRepo = new AccountRepo();

        $account = $accountRepo->findById($user->id);

        if (!$account->phone) return null;

        $params = [
            $params['course']['title'],
            $params['chapter']['title'],
            $params['live']['start_time'],
        ];

        $templateId = $this->getTemplateId($this->templateCode);

        return $this->send($account->phone, $templateId, $params);
    }

}
