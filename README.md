# How to run application
1. Install composer [link](https://getcomposer.org/)
2. Run these commands:
    ```bash
    composer install
    php -S localhost:8000 -t public/
    ```
3. Test it:
    
     we have two clients in our fake db now(client1, client2)
    ```bash
    curl http://localhost:8000/rest/v2/client/client1
    curl http://localhost:8000/rest/v2/client/client2
    ```
# How to run unit tests
1. Install composer [link](https://getcomposer.org/)
2. Run these commands:
    ```bash
    composer install
    ./vendor/bin/phpunit tests/
    ```