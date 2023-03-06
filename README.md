
# TODO List




## Getting Started

Clone the repository

```bash
  git clone https://github.com/elainetee/todo.git
```

Install all the dependencies using composer

```bash
  composer install
```

Copy the example env file and make the required configuration changes in the .env file

```bash
  cp .env.example .env
```

Generate a new application key

```bash
  php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)


```bash
  php artisan migrate
```

Start the local development server

```bash
  php artisan serve
```
    
