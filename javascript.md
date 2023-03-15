# JavaScript Documentation

You can use [JavaScript Standard Style](https://standardjs.com/) or [Google JavaScript Style Guide](https://google.github.io/styleguide/jsguide.html). I recommend using [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript)

Best Practice: [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript)

- [Template Literals](#template-literals)
- [Object](#object)
  - [Delete Object](#delete-object)
- [Array](#array)
  - [Array Push](#array-push)
  - [Array Pop](#array-pop)
  - [Array Shift](#array-shift)
  - [Array Unshift](#array-unshift)
  - [Array Splice](#array-splice)
  - [Array Map](#array-map)
  - [Array Filter](#array-filter)
- [Spread Operator](#spread-operator)
  - [Rest Parameter](#rest-parameter)
- [Destructuring Object And Array](#destructuring-object-and-array)
- [Anonymous Function](#anonymous-function)
- [Arrow Function](#arrow-function)
- [Class](#class)

## Template Literals

```javascript
const fullName = 'Ahmad Fauzy';

console.log(`Selamat Pagi, ${fullName}`);
// Output: Selamat Pagi, Ahmad Fauzy
```

## Object

```javascript
const user = {
  firstName: 'Ahmad',
  'Last Name': 'Fauzy',
};

console.log(`${user.firstName} ${user['Last Name']}`);
// Output: Ahmad Fauzy
```

### Delete Object

```javascript
const user = {
  firstName: 'Ahmad',
  'Last Name': 'Fauzy',
};

delete user.firstName;
console.log(`${user.firstName} ${user['Last Name']}`);
// Output: undefined Fauzy
```

## Array

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr[arr.length - 1]);
// Output: 5
```

### Array Push

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr);
// Output: [1, 2, 3, 4, 5]

arr.push(6);
console.log(arr);
// Output: [1, 2, 3, 4, 5, 6]
```

### Array Pop

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr);
// Output: [1, 2, 3, 4, 5]

arr.pop();
console.log(arr);
// Output: [1, 2, 3, 4]
```

### Array Shift

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr);
// Output: [1, 2, 3, 4, 5]

arr.shift();
console.log(arr);
// Output: [2, 3, 4, 5]
```

### Array Unshift

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr);
// Output: [1, 2, 3, 4, 5]

arr.unshift(0);
console.log(arr);
// Output: [0, 1, 2, 3, 4, 5]
```

### Array Splice

```javascript
const arr = [1, 2, 3, 4, 5];

console.log(arr);
// Output: [1, 2, 3, 4, 5]

arr.splice(0, 1);
console.log(arr);
// Output: [2, 3, 4, 5]
```

### Array Map

```javascript
const number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
const evenNumber = number.map((number) => number * 2);

console.log(number);
// Output: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
console.log(evenNumber);
// Output: [2, 4, 6, 8, 10, 12, 14, 16, 18, 20]
```

### Array Filter

```javascript
const number = [2, 3, 4, 5, 6];
const evenNumber = number.filter((number) => Boolean(number % 2 == 0));

console.log(number);
// Output: [2, 3, 4, 5, 6]
console.log(evenNumber);
// Output: [2, 4, 6]
```

```javascript
const students = [
  {
    name: 'John',
    score: 80,
  },
  {
    name: 'Mary',
    score: 90,
  },
  {
    name: 'Mike',
    score: 70,
  },
];

const passExam = students.filter((student) => student.score >= 80);
console.log(passExam);
// Output: [{name: "John", score: 80}, {name: "Mary", score: 90}]
```

## Spread Operator

```javascript
const arr = [1, 2, 3, 4, 5];
console.log(...arr);
// Output: 1 2 3 4 5

const arr2 = [6, 7, 8, 9, 10];
const arr3 = [...arr, ...arr2];
console.log(arr3);
// Output: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
```

```javascript
const obj = {
  firstName: 'Ahmad',
  lastName: 'Fauzy',
};

const obj2 = {
  age: 21,
};

const obj3 = { ...obj, ...obj2 };
console.log(obj3);
// Output: {firstName: "Ahmad", lastName: "Fauzy", age: 21}
```

### Rest Parameter

```javascript
function restParam(...arr) {
  console.log(arr);
}

restParam(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Output: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
```

## Destructuring Object And Array

```javascript
const obj = {
  firstName: 'Ahmad',
  lastName: 'Fauzy',
};

const { firstName, lastName, age = 21 } = obj;
console.log(`${firstName} ${lastName} ${age}`);
// Output: Ahmad Fauzy 21
```

```javascript
const obj = {
  firstName: 'Ahmad',
  lastName: 'Fauzy',
};

let firstName = 'Muhammad';
let lastName = 'Fauzan';

({ firstName, lastName } = obj);

console.log(`${firstName} ${lastName}`);
// Output: Ahmad Fauzy
```

```javascript
const obj = {
  firstName: 'Ahmad',
  lastName: 'Fauzy',
};

const { firstName: localFirstName, lastName: localLastName } = obj;

console.log(`${localFirstName} ${localLastName}`);
// Output: Ahmad Fauzy
```

```javascript
const arr = [1, 2, 3, 4, 5];

const [, , , , fifth] = arr;

console.log(fifth);
// Output: 5
```

```javascript
const arr = [1, 2, 3, 4, 5];

let first;
let second;

[first, second] = arr;

console.log(`${first} ${second}`);
// Output: 1 2
```

```javascript
let x = 1;
let y = 2;

[x, y] = [y, x];

console.log(x);
// Output: 2
console.log(y);
// Output: 1
```

## Anonymous Function

```javascript
const greet = function (name) {
  console.log(`Selamat Pagi, ${name}!`);
};

greet('Ahmad Fauzy');
// Output: Selamat Pagi, Ahmad Fauzy!
```

## Arrow Function

```javascript
const greet = (name) => console.log(`Selamat Pagi, ${name}!`);
greet('Ahmad Fauzy');
// Output: Selamat Pagi, Ahmad Fauzy!

const multiply = (a, b) => a * b;
console.log(multiply(2, 3));
// Output: 6

const divide = (a, b) => {
  return a / b;
};
console.log(divide(6, 2));
// Output: 3
```

## Class

```javascript
class Mail {
  constructor(from) {
    this.from = from;
    this._contacts = [];
  }

  sendMessage(to, msg) {
    console.log(`You send: ${msg} to ${to} from ${this.from}`);
    this._contacts.push(to);
  }

  getContacts() {
    return this._contacts;
  }
}

class Whatsapp extends Mail {
  constructor(from, username, isBusiness) {
    super(from);
    this._username = username;
    this.isBusiness = isBusiness;
  }

  sendMessage(to, msg) {
    if (this.isBusiness) {
      console.log(`You send: ${msg} to ${to} from ${this.from} (${this._username})`);
    } else {
      super.sendMessage(to, msg);
    }
  }
}

const mail1 = new Mail('madfauzy28@gmail.com');
mail1.sendMessage('contact@google.com', 'Halo');
// Output: You send: Halo to contact@google.com from madfauzy28@gmail.com

console.log(mail1.getContacts());
// Output: ["contact@google.com"]

const whatsapp1 = new Whatsapp('08123456789', 'Fauzy', true);
whatsapp1.sendMessage('0812341234', 'Halo Ahmad');
// Output: You send: Halo Ahmad to 0812341234 from 08123456789 (Fauzy)
```
