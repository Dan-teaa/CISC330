const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

const cat = {
    name:"Pinecone", 
    age:13, 
    type:'Munchkin', 
    cuteness: 9001
};

// #6 
let availableCats=[];

for (i = 0; i < 14; i++) {
    if (cats[i].adoptionStatus === 'available') {
        availableCats.push(cats[i].name); 
    } 
}

console.log("Cat's availble for adoption: " + availableCats.join(", "));

// #7
let myVariable = Math.random() * 10;
if (myVariable < 5) {
    console.log('Less than 5 :(')
} else {
    console.log("Greater than 5 :)")
}

// #8

for(let property in cat) {
    console.log(cat[property])
  }

// #9

let int = 1;
let string = '1';

if (int == string) {
    console.log('True')
}

if (int !== string) {
    console.log('False')
}

// #10

let message = ' is so cute!'
let newCatArray = [];
newCatArray = cats.map(function(cat) {
    return cat.name + message;
});  

console.log(newCatArray);