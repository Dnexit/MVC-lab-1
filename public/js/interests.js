let list = document.querySelector(".anchoras ul");

let items = [ 
    {
        href: '#books',
        text: 'книги',
    }, {
        href: '#films',
        text: 'фильмы',
    }, {
        href: '#TV_series',
        text: 'сериалы',
    }, {
        href: '#cartoons',
        text: 'мультфильмы',
    }, {
        href: '#hobby',
        text: 'хобби',
    },
];


for (let item of items) {
    let li = document.createElement('li');
    let a = document.createElement('a');
    a.innerText = item.text;
    a.href = item.href;
    li.appendChild(a);
    list.appendChild(li);
}