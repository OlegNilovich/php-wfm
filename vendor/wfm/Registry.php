<?php
/*
Класс Registry обеспечивает глобальный доступ к свойствам, сохраненным в нем.
Это может быть полезно для передачи данных между разными частями приложения или для
хранения глобальных настроек. содержит следующие методы:

setProperty($name, $value) - устанавливает значение свойства с заданным именем
getProperty($name) - возвращает значение свойства с заданным именем
getProperties() - возвращает все значения свойств в виде ассоциативного массива
*/
namespace wfm;


class Registry
{

    use TSingleton;

    protected static array $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        return self::$properties[$name] ?? null;
    }

    public function getProperties(): array
    {
        return self::$properties;
    }

}
