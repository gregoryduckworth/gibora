<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Auth\ForgotPasswordPage;
use Tests\Browser\Pages\Auth\LoggedOutPage;
use Tests\Browser\Pages\Auth\LoginPage;
use Tests\Browser\Pages\Auth\RegisterPage;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testVisitLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new LoggedOutPage)
                ->click('@login')
                ->on(new LoginPage);
        });
    }

    public function testVisitRegisterPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new LoginPage)
                ->click('@not_registered')
                ->on(new RegisterPage);
        });
    }

    public function testVisitResetPasswordPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new LoginPage)
                ->click('@password_reset')
                ->on(new ForgotPasswordPage);
        });
    }
}
