<?php
namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;

class MailResetPasswordToken extends ResetPassword
{
	public static $createUrlCallback = [self::class, 'createActionUrl'];

	public static function createActionUrl($notifiable, $token)
	{
		return $notifiable->is_business
			? url(route('auth.business.password.reset', [
				'token' => $token,
				'email' => $notifiable->getEmailForPasswordReset(),
			], false))
			: url(route('auth.customer.password.reset', [
				'token' => $token,
				'email' => $notifiable->getEmailForPasswordReset(),
			], false));
	}
}
