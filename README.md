Feel free to clone the repo if you want to play with livewire or inspect the code: 

1. `git clone https://github.com/alfredogalvan/livewire.git`
2. `composer install` (this installation include livewire)
3. `cp .env.example .env`
4. configure your database in the `.env` file
5. configure mailtrap for the email send form: https://mailtrap.io/inboxes/1889434/messages
6. `php artisan migrate --seed`

Note: if you create a new route, it's necesary use `php artisan optimize`
