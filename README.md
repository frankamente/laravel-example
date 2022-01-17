# Laravel example

To launch project

`
./vendor/bin/sail up -d
`
## Create a model with migration, seeder, factory and controller:

`./vendor/bin/sail artisan make:model SomeEntity -msfc`

## Create new table to database

`./vendor/bin/sail artisan migrate`

## Insert rows with seeder

`./vendor/bin/sail artisan migrate:fresh --seed`

