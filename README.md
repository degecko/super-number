# SuperNumber

SuperNumber is a number objectifier. Its purpose is to keep simple math OOP friendly. If you're looking for a way to clean up your views, this will do the job.

To use it, you can use it via composer:

```
composer require degecko/super-number
```

Then, simply initialize it on any number:

```
$number = new DeGecko\SuperNumber(100);
```

If you need to initialize it multiple times, I recommend creating a helper, like the following:

```
function number ($n) {
    return new DeGecko\SuperNumber($n);
}
```

Available Methods
-

#### Simple Math
- `add()` / `plus()` to perform addition
- `subtract()` / `sub()` / `minus()` to perform subtraction
- `multiply()` / `times()` to perform multiplication
- `divide()` / `over()` to perform division

All of the above support 2 parameters. The first is the value that you want to use with the current number, and the second parametere specifies if that value should be treated as a percentage.

E.g.

```
number(50)->add(10); // Returns 60
number(50)->add(10, true); // Returns 55, because 50 + 10% of 50 = 55
```

Of course, you can chain them together:

```
number(10)->add(3)->divide(2); // Returns 6.5
```

Apart from those, there are other basic methods:

- `increment()` / `decrement()` which are aliases of `add(1)` and `subtract(1)`. You can specify a different value by passing it as the first parameter.
- `power()` / `pow()` to raise to a power
- `modulo()` / `mod()` to perform modulo

E.g.

```
number(5)->increment(); // Returns 6
number(5)->decrement(2); // Returns 3
number(10)->increment(10, true); // Returns 11, because 10% of 10 is 1, and 10 + 1 = 11
number(2)->power(3); // Returns 8
number(10)->mod(5); // Returns 0
```

#### Formulas

- `percentageOf()` / `percentOf()` computes the percentage of the current number from the given value.
- `percentageFrom()` / `percentFrom()` computes what percentage of the given number represents the current number.

E.g.

```
number(40)->percentOf(200); // Returns 20, because 40 is 20% of 200.
number(40)->percentFrom(200); // Returns 80, because 40% of 200 is 80.
```

#### Mutators

- `mutate(callable $fn)` will let you alter the currently stored number any way you want, by passing it a callable function. The first parameter of the function is the current $value. Whatever you return, will become the new number.

*Warning!* This does not validate your new value to be numeric.

E.g.

```
number(3.1)->mutate(function ($value) {
    return (int) $value;
}); // Returns 3
```

#### Output

The magic method __toString() will return `(string) $this->number;`, so there's no need to call another method to get the output of a current SuperNumber object. However, there are additional methods to get the output, if required.

- `get()` which returns the current number, uncasted.
- `printf($pattern, ...$arguments)` which allows you to use sprintf() on the current number. It automatically adds the second sprintf parameter to be the current value.
- `format($decimals = 0, $decPoint = '.', $thousandsSep = ',')` which is an alias of number_format. It supports the same parameters as number_format.

```
number(10)->printf('%d'); // Returns 10
number(10)->printf('$%.2f'); // Returns $10.00

number(1000)->format(); // Returns 1,000
number(1000)->format(2); // Returns 1,000.00
number(1000)->format(2, '_'); // Returns 1,000_00
number(1000)->format(2, '_', '-'); // Returns 1-000_00
```

#### Castings

- `toInt()` will cast the current value to an integer
- `toFloat()` will cast the current value to a float

And, also of the PHP math functions are supported and can be chained together:

- `abs()`
- `acos()`
- `acosh()`
- `asin()`
- `asinh()`
- `atan()`
- `atanh()`
- `ceil()`
- `cos()`
- `cosh()`
- `deg2rad()`
- `exp()`
- `expm1()`
- `floor()`
- `fmod()`
- `log10()`
- `log1p()`
- `log()`
- `min()`
- `max()`
- `rad2deg()`
- `round()`
- `sin()`
- `sinh()`
- `sqrt()`
- `tan()`
- `tanh()`
- `base_convert()`
- `bindec()`
- `decbin()`
- `dechex()`
- `decoct()`
- `hexdec()`
- `octdec()`
- `pow()`

E.g.

```
number(-9)->abs()->pow(2); // Returns 81 
```

You can find those defined in the official PHP documentation.

## Author

Cosmin Gheorghita
([degecko.com](http://degecko.com))