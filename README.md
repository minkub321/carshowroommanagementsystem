//step one 
npm install
composer install

//step two 
php artisan migrate


//step three
php artisan serve 

//step four
//enter your sql
INSERT INTO users (
id, name, email, email_verified_at, password,
two_factor_secret, two_factor_recovery_codes, remember_token,
current_team_id, profile_photo_path, created_at, updated_at
) VALUES (
1, 'yourname', 'youremail', NOW(),
'$2y$10$AfqXfrbZfwzYViJ9NQJDr.FOenUTHWSalHnYiflL3SOao9tYbmvse', //password = 123123123
NULL, NULL, NULL,
NULL, NULL,
NOW(), NOW()
);
