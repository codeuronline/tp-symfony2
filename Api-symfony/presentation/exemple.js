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
// cela ne marche pas , cepenant les methode yield et yield* ne peuvent utliser que dans une
// fonction génératrice, mais la fonction de flèche imbriquée dans ce code est une fonction
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
// la valeur de retour n'apparaît pas à l'itération normale
[...oneAndDone()] // => 1
// mais il est disponible si vous appelez explicitement next()
let generator = oneAndDone();
generator.next()                // => {value :1, done:false}
generator.next()                // => {value: done,done:true}
// si le generateur est deja done , le retour de la value n'est pas a nouveau retourné
generator.next()                // =>{value: undefined,done: true}


// nous avons traité le yield comme une déclaration indiquant qu'une value mais elle n'a pas de value propre
// en fait, cependant le yield est une expression et il peut avoir une value
// quand la methode next() d'un generateur est invoquée, la fonction generatrice s'execute tant qu'elle n'a
// pas atteint l'expression yield. L'expression qui suit le mot clé Yield est evalué et la value  devient la valeur
// retour de next() invoqué. A ce point, la fonction de génératrice arrête de s'exécuter à droite du générateur
// au milieu de l'évaluation de l'expression de Yield. la prochaine fois que le methode next() est appelé ,
// l'argument passe à  next() devient  la value de l'expression Yield  qui etait en pause. alors le generateur
// renvoie des valeurs à son appelant avec Yield, et l'appelant passe les valeur  dans le generateur avec next()
// le générateur et l'appelant sont deux flux distincts d'exécution passant des valeurs (et un contrôle) dans les deux sens

function* smallNumbers() {
    console.log("next() invoqué la premiere fois; argument rejeté");
    let y1 = yield 1;       // y1 == b
    console.log("next() invoqué une seconde fois avec l'argument", y1);
    let y2 = yield 2;       // y2 == c
    console.log("next() invoqué une 3ieme fois avec l'argument", y2);
    let y3 = yield 3;       // y3 == d
    console.log("next() invoqué une 4ieme fois avec l'argument", y3);
    return 4;
}
let g = smallNumbers();
console.log("generateur créé: aucun code encore exécuté");
let n1 = g.next("a");   // n1.value == 1
console.log("generateur yieled", n1.value);
let n2 = g.next("b");   // n2.value == 2
console.log("generateur yieled", n2.value);
let n3 = g.next("c");   // n3.value == 3
console.log("generateur yieled", n3.value);
let n4 = g.next("d");   // n4.value == {value: 4 ,done: true}
console.log("generateur return", n4.value);

// lorsque ce code s'exécute, ses produits produisent la sortie suivante
// qui montre les allers - retours entre les deux blocs de code
// voir le resultat


// en plus de fournir une entrée à un générateur avec next(), vous pouvez également modifier
// le flux de contrôle à l'intérieur du générateur en appelant ses méthodes return() et throw().
// value ou throw exception comme si la prochaine instruction du générateur était un retour ou un throw
// return() stop l'execution
// throw() renvoie un signal arbitraire sous la forme d'une exception 