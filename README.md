# MoveHQ

MoveHQ is a tech assessment project for MoveHQ.

## Getting Started

Make sure Docker, PHP, composer, and npm are installed.

Open a console and navigate to the code directory.

Copy the .env.example file to .env

`$ cp .env.example .env`

Install third party packages

`$ npm install`

`$ composer install`

Initialize Laravel Sail, which will build the Docker containers on your machine when run the first time.

`$ ./vendor/bin/sail up`

In another console, run npm:

`npm run dev`

Now, you can access the app by visiting http://localhost

To get full access, register an account by visiting http://localhost/register


