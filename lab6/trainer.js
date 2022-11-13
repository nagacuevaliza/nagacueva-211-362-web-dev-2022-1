// -- Возведение в степень
function pow(x, n) {
    let result = 1;
    for (i = 0; i < n; i++) {
      result *= x;
    }
  
    return result;
  }

  console.log("HBJDCHBED")
  
  // -- Минимальная цифра в числе
  function minDigit(x) {
    min = Number.MAX_VALUE;
  
    if (x == 1){
        return 1;
    }

    while (x > 1) {
      a = Math.floor(x % 10);
  
      if (a < min) {
        min = a;
      }
  
      x = x / 10;
    }
  
    return min;
  }
  
  // -- НОД двух чисел
  function gcd(a, b) {
    let nod = 0;
  
    while (a != 0 && b != 0) {
      if (a >= b) {
        a = a % b;
      } else {
        b = b % a;
      }
      nod = a + b;
    }
  
    return nod;
  }
  
  // -- n записей
  function pluralizeRecords(n) {
    if ((n >= 10 && n <= 20) || n % 10 >= 5 || n % 10 ==0) {
      return "Найдено " + n + " записей";
    }
  
    if (n % 10 === 1) {
      return "Найдена " + n + " запись";
    }
  
    if (n % 10 >= 2 && n % 10 <= 4) {
      return "Найдено " + n + " записи";
    }
  }
  
  // -- Фиббоначи
  function fibb(n) {
    let fib = [0, 1];
  
    if (n > 1000) {
      console.log("Слишком большое число!");
      return;
    }
  
    for (let i = 2; i <= 100; i++) {
      fib[i] = fib[i - 2] + fib[i - 1];
    }
  
    return fib[n - 1];
  }
  
  while (true) {
    const result = prompt(
      "Выберите тип функции: 1 - возведение в степень, 2 - минимимальная цифра в числе, 3 - НОД двух чисел, 4 - кол-во записей, 5 - Фиббоначи (для выхода - q)"
    );
  
    if (result === "q") break;
  
    if (result === "1") {
      const a = prompt("Введите число");
      const b = prompt("Введите степень");
      alert(a + " в степени " + b + " равно " + pow(a, b));
    }
  
    if (result === "2") {
      const a = prompt("Введите число");
      alert("Наименьшая цифра в числе: " + minDigit(a));
    }
  
    if (result === "3") {
      const a = prompt("Введите первое число");
      const b = prompt("Введите второе число");
      alert("НОД двух чисел: " + gcd(a, b));
    }
  
    if (result === "4") {
      const a = prompt("Введите число");
      alert(pluralizeRecords(a));
    }
  
    if (result === "5") {
      const a = prompt("Введите число");
      alert("Число под номером " + a + " в последовательности: " + fibb(a));
    }
  }