<?php

class AddProductRequest implements Validation
{
    private static $validatedData = [];
    private static $errors = [];

    public static function required($attr, $args)
    {
        if (empty($_POST[$attr])) {
            self::$errors[] = "$attr is required";
        }
    }

    public static function unique($attr, $args)
    {
        $result = DB::query("SELECT * FROM $args[0] WHERE $attr=:data", [':data' => $_POST[$attr]]);
        if (!empty($_POST[$attr]) && count($result) > 0) {
            self::$errors[] = "$attr entered is already exists, please enter another $attr";
        }
    }

    //
    public static function regular_expression($attr, $args)
    {
        if (!empty($_POST[$attr]) && !preg_match($args[0], $_POST[$attr])) {
            self::$errors[] = "$attr must contain only characters and spaces";
        }
    }

    public static function digits($attr, $args)
    {
        if (!empty($_POST[$attr]) && !is_numeric($_POST[$attr])) {
            self::$errors[] = "$attr must contain only digits";
        }
    }

    // Custom validation rules

    public static function required_without_all($attr, $args)
    {
        $flag = false;
        foreach ($args as $arg) {
            if (!empty($_POST[$arg])) {
                $flag = true;
                break;
            }
        }

        if (!$flag) {
            self::$errors[] = "You must enter one of the product-specific attributes and its value";
        }
    }

    public static function required_with($attr, $args)
    {
        if (empty($_POST[$attr])) {
            foreach ($args as $arg) {
                if (!empty($_POST[$arg])) {
                    self::$errors[] = "$attr is required";
                    break;
                }
            }
        }
    }

    public static function prohibited_if($attr, $args)
    {
        if ($_POST['type'] != $args[0]) {
            $_POST[$attr] = NULL;
        }
    }

    public static function validate($rules): array
    {
        // Validate that:

        // 1) SKU, Name & Price are entered

        // 2) SKU is unique

        // 3) Name is entered correctly only letters no digits or special characters

        // 4) Price is only digits

        // 5) Only One special attribute is entered

        // 6) If size is specified, it is only digits

        // 7) If weight is specified, it is only digits

        // 8) If height is specified, it is only digits

        // 9) If width is specified, it is only digits

        // 10) If length is specified, it is only digits

        // 11) All furniture attributes height, width & length are entered

        foreach ($rules as $key => $rule) {
            foreach ($rule as $item => $values) {
                self::$item($key, $values);
            }
            self::$validatedData[$key] = $_POST[$key];
        }

        return self::$validatedData;
    }

    public static function getErrors(): array
    {
        return self::$errors;
    }

}