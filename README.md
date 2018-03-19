# SuperNumber

SuperNumber is a number objectifier. Its purpose is to keep simple math OOP friendly. If you're looking for a way to clean up your views, this will do the job.

To use it, you can use it via composer:

```
composer install degecko/super-number
```

Then, simply initialize it on any number:

```
$number = new SuperNumber\SuperNumber(100);
```

If you need to initialize it multiple times, I recommend creating a helper, like the following:

```
function number ($n) {
    return new SuperNumber\SuperNumber($n);
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

Apart from those, there are two other basic methods:

- `power()` / `pow()` to raise to a power
- `modulo()` / `mod()` to perform modulo

E.g.

```
number(2)->power(3); // Returns 8
number(10)->mod(5); // Returns 0
```

Also, there are some common fomulas available, like:

- `percentageOf()` / `percentOf()` computes the percentage of the current number from the given value.
- `percentageFrom()` / `percentFrom()` computes what percentage of the given number represents the current number.

E.g.

```
number(40)->percentOf(200); // Returns 20, because 40 is 20% of 200.
number(40)->percentFrom(200); // Returns 80, because 40% of 200 is 80.
```

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