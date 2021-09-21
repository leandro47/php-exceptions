
# php-exceptions

Error Handling with PHP


#### Example:
```php
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $e) {
        echo $e->getMessage() . PHP_EOL;
        throw new RuntimeException('exceção tratada', 500, $e);
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

/**
 * @throws RuntimeException
 *
 * @return void
 */
function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    throw  new RuntimeException();
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
try {
    funcao1();
} catch (RuntimeException $e) {
    echo 'alguma coisa deu pau' . PHP_EOL;
}
echo 'Finalizando o programa principal' . PHP_EOL;

```
