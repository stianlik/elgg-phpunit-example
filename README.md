# Example on PHPUnit for Elgg plugins

Before trying this, create an empty database named `test` with
username/password `test/test` on `localhost`.

```Shell

# Install dependencies
composer install

# Patch Elgg, softlink plugin into mod, and reset database
make install

# Run tests
make test

# .. or run tests directly
phpunit

```
