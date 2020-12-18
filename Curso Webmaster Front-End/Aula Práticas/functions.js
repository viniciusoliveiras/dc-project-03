window.onload = function () {
  // Calculadora();

  let obj = {
    nome: "Vinícius",
    idade: 19,
    func: function () {
      console.log("Function is working, bitch");
    },
  };
  obj.func();
};

function Calculadora() {
  function calculator(a, b) {
    return a + b;
  }

  let res = calculator(1, 6);
  console.log(`O resultado da soma é ${res}`);
}
