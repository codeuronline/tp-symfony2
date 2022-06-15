// exemple d'instruction function* definissant un générateur 

// une fonction generatrice qui produit l'ensemble des nombres premiers à un chiffre (base10)
function* oneDigitPrimes() {
    yield 2;
    yield 3;
    yield 5;
    yield 7;
}

// quand on invoque la fonction génératrice, on obtient le générateur
let primes = oneDigitPrimes();

// un generateur est un "objet iterateur" qui s'itere les valeurs produites
// primes.next().value;
console.log(primes.next().value); // => 2
// primes.next().value;
console.log(primes.next().value); // => 3
// primes.next().value;
console.log(primes.next().value); // => 5
// primes.next().value;
console.log(primes.next().value); // => 7
// primes.next().value;
console.log(primes.next().value); // => undefined
console.log(primes.next().done); // => true

// les generateurs ont la methode Symbol.iterator pour les rendre iterables
console.log(primes[Symbol.iterator]()); // => primes

// on peut utliser les generators comme  les autres type iterables
console.log([...oneDigitPrimes()]) // => [2,3,5,7]
let sum = 0;
for (let prime of oneDigitPrimes()) sum += prime;
console.log(sum);   // =>17

// exemple de function generatrice sous forme d'expression

// la encore on insere un asterisque apres le mot clé function 
const seq = function* (from, to) {
    for (let i = from; i <= to; i++) yield i;
};
console.log([...seq(3, 5)]);     //  => [3,4,5]

// dans les classes et les littéraux d'objet,
// nous pouvons utiliser la notation abrégée pour omettre entièrement le mot-clé "function"
// lorsque nous définissons des méthodes pour definir un generateur dans ce contexte,
// on utilise simplement l'asterisque avant, le nom de la methode où le mot clé "function"
// aurait été, si nous l'avions utilisé:

let o = {
    x: 1, y: 2, z: 3,
    // un generateur qui donne chacune des clés de cet objet
    *g() {
        for (let key of Object.keys(this))
            yield key;
    }
};
console.log([...o.g()]) // ["x","y","z","g"]


//---------------------------------------------------------------------------------------------
// note : il n'y a aucun moyen d'ecrire une fonction generatrice
// utilisant  la syntaxde de fonction fleché
// les générateurs facilitent souvent la défintion dec classes itérables
// on peut remplacer la methode [Symbol.iterator]() vu precédement
// avec unfonction generatrice beaucoup plus courte *[Symbol.iterator&rback;()
    // qui ressemble à ca:
    // declaration erroné
//       *[Symbol.iterator() {
//           for (let x = Math.ceil(this.from); x <= this.to; x++) yield x
//   }
//---------------------------------------------------------------------------------------------




// exemple de generateur
// suite de fibonnci

function* fibonacciSequence() {
    let x = 0, y = 1;
    for (; ;){
        yield y;
        [x,y]=[y,x+y]
    }
} //-> fonction infini crash serveur
 
function fibonacci(number) {
    for (let f of fibonacciSequence()) {
        if (number-- <= 0) return f;
    }
}
let number = 20;
console.log("fibonaci(" + number + ") : " + fibonacci(number));

// ce genre de générateur infini devient plus utile
// avec le générateur take() comme ce-ci :
// produire les n premiers éléments de l'objet itérable spécifié
function* take(n, iterable) {
    let it = iterable[Symbol.iterator]()    // Obtient l'iterator pour l'object iterable
    while (n-- > 0) {                       // Boucle n fois
        let next = it.next();               // Obtient le prochain objet de l'iterator
        if (next.done) return;              // Si il n'y a plus de valeur, on revient
        else yield next.value;              // Sinon on retourne la valeur 
    }
}
// un tableau des 5 premier elememnt de la suite de fibonacci
console.log([...take(5, fibonacciSequence())]);

// voici un autre générateur utile qui entrelace
// les éléments de plusieurs objets itérables

function* zip(...iterables) {
    // Obtenir un iterrateor pour chaque iterable
    let iterators= iterables.map(i => i[Symbol.iterator]());
    let index = 0
    while (iterators.length > 0) {       // Tant qu'ils restent des iterateurs 
        if (index >= iterators.length) { // Si on a atteint le dernier iterator
            index = 0;                   // on retourne au premier
        }        
        let item = iterators[index].next(); // Obetnir le prochain objet du prochain Iterator
        if (item.done) {                    // Si cet iterator est done
            iterators.splice(index, 1);     // on le spprime du tableau  
        } else {                            // sinon
            yield item.value;               // donne la valeur itérée
            index++;                        // on se deplace au prochain iterator
        }
    
    }
}
// entrelacer 3 objets iterable
console.log("entrelacement");
console.log([...zip(oneDigitPrimes(), "ab", [0])]); // =>[2,"a",0,3,"b",5,7]


// ca pourrait etre utile d'avoir en plus d'un generateur zip()
// une fonction génératrice similaire qui donne séquentiellement
//  les éléments de plusieurs objets itérables plutôt que de les laisser inertes
// on peut ecrire ce generateur comme ceci
function* sequence(...iterables) {
    for (let iterable of iterables) {
        for (let item of iterable) {
            yield item;
        }
    }
}
console.log("sequence");
console.log([...sequence("abc",oneDigitPrimes())]); // =>["a","b","c",2,3,5,7]

//le processus de production des éléments d'un autre objet itérable est suffisamment
// courant dans les fonctions génératrices pour que ES6 ait une syntaxe spéciale pour celui - ci
// le mot-clé yield* est comme yield sauf que, plutôt que de produire une seule valeur,
// il itère un objet itérable et produit chacune des valeurs résultantes
function* sequence(...iterables) {
    for (let iterable of iterables) {
        yield* iterable;
    }
}
console.log([...sequence("abc", oneDigitPrimes())]); // =>["a","b","c",2,3,5,7]


// la méthode array foreach() est souvent un moyen élégant de boucler sur les éléments d'un tableau,
//  vous pourriez donc être tenté d'écrire la fonction sequence() comme celle-ci
// function* sequence(...iterables) {
//     iterables.forEach(iterable => yield* iterable) // error    
// }
// cela ne marche pas , cependant les methode yield et yield* ne peuvent etre utlisees que dans une
// fonction génératrice, mais la fonction lèchée imbriquée dans ce code est une fonction
// régulière, pas la function* donc la valeur n'est pas retourné

// l'utilisation la plus courante des fonctions génératrices consiste à créer des itérateurs
// mais la caractéristique fondamentale des générateurs est qu'ils permettent des
// résultats intermédiaires puis reprennent le calcul plus tard
// cela signifie que les générateurs ont des fonctionnalités au-delà de celles des itérateurs

// les fonctions génératrices que nous avons vues jusqu'à présent n'ont pas eu d'instructions
// de retour, ou si elles en ont, elles ont été utilisées pour provoquer un retour anticipé,
//  et non pour renvoyer une valeur comme si, une fonction génératrice peut retourner une valeur
// afin de comprendre ce qui se passe dans le cas, rappelez-vous comment fonctionne l'itération
// la valeur de retour de la fonction next() est un objet qui a une propriété value et/ou 
// une propriété done avec des itérateurs et un générateur typiques, si la propriété value 
// est définie, alors la propriété done est indéfinie ou est fausse, mais dans le cas d'un 
// générateur qui renvoie une valeur, l'appel final pour renvoyer ensuite un objet qui a à la fois valeur 
 // et done défini

function* oneAndDone() {
    yield 1;
    return "done";
}
// reourne value qui n'apparait pas dane une iteration normal 
[...oneAndDone()] // =>1
// mais il est diponible si vous appelez explicitement next()
let generator = oneAndDone();
console.log(generator.next()); // => {value: 1, done:false}
console.log(generator.next()); // => {value: "done", done:true}
console.log(generator.next()); // si le generateur est déja a atteint la valeur done, 
                               // la valeur n'est pas retourne encore
