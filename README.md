# Cauldron Overflow

Following [symfony cast's](https://symfonycasts.com/screencast/symfony/setup) tutorial.

## Create new Symfony project
```bash
symfony new project_name
# or
composer create-project symfony/skeleton project_name
```

## Run the webserver
```bash
# run this command only once
symfony server:ca:install
# HTTPS self signed server
symfony server:start
symfony serve

# or a normal php server
php -S 127.0.0.1:8000 -t public/
```

You can also use `symfony serve -d` to run it in background (as a demon) and stop it with `symfony server:stop`

## Notes taken during the course
`public` is the document root. In contains the front controller: `index.php` \
A `route` defines the URL of the page, while the `controller` defines where you write PHP code to build that page.

Add the **annotations**:
```bash
composer require annotations
```

I have to watch [this](https://symfonycasts.com/screencast/symfony/console#play) lesson.