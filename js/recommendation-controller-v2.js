var human = 0;
// var aaron,lena,justin,kali,evan,brett,william,winnie = new Image();
var people = [
    ['url(\'../img/endorsements-aaron.jpg\')', 'Arron Winn', 'Oh man, I am not sure where to begin. Matthew excelled during all phases of revamping my website. First, Matthews communication with me was extremely efficient. Matthew has a firm understanding of consumer needs, and packs the knowledge to articulate any issues clearly. Matthews "people skills" were outstanding, I was never left with any unanswered questions. His knowledge is second to none. He literally walked me through some coding and spent a couple of hours on the phone with resolving some issues. I have worked with a few developers and none have promised on their word like Matt. I would recommend Matthews services to anyone seeking branding, modern web design or seeking to revamp their site.'],
    ['url(\'../img/endorsements-lena.jpg\')', 'Lena Fare', 'Matthew did a great job creating my subreddit design on https://www.reddit.com. He did what was asked of him in a timely manner. I highly recommend him for any web development needs, from simple to complex design.'],
    ['url(\'../img/endorsements-justin.jpg\')', 'Justin Solomon', 'I\'ve known Matt for about one year now. We both attended the Internet & Web-Based Technology course at Ranken Technical College. After working with Matt on daily projects and homework assignments I quickly began to realize that he is a very hard working and driven individual. He always applied the things he learned outside of class to the problems at hand. Matt was a big help to me and would make a great asset to any team.'],
    ['url(\'../img/endorsements-kali.jpg\')', 'Kali Rogers', 'I worked with Matthew for a short time at Intaglio Creative. He is knowledgeable and skilled at his craft. He communicates well and cares about his clients and work.'],
    ['url(\'../img/endorsements-evan.jpg\')', 'Evan Gudmestad', 'Matt has been a student of mine for the past year and a half. He has a passion for web development and a passion to succeed! Many students get caught up in the daily homework, labs, and tests and forget to focus on the big picture but Matt does not have that problem. He learns additional skills on top of what is taught in the classroom and attends local developer events to try and broaden his network all of which should help him on path to a successful career in development.'],
    ['url(\'../img/endorsements-brett.jpg\')', 'Brett Nickel', 'Matt and I have worked on a few projects together. He has been easy to work with and produces great results. I intend to use his skills and services in the future.'],
    ['url(\'../img/endorsements-william.jpg\')', 'William Cook', 'Matthew was a pleasure to have in my Introduction to Business and Management class His assignments were always submitted on time and always well done! His attendance record was exemplary. He regularly contributed in a very meaningful way to our daily class discussions. And he knew what he was talking about. I strongly recommend Matthew for any position for which his many skills would be a great match for the organization.'],
    ['url(\'../img/winnie-the-pooh.jpg\')', 'Winnie The Pooh', 'Before beginning a Hunt, it is wise to ask someone what you are looking for before you begin looking for it.'],
];
// var photo = document.getElementById("recommendation-photo");
// var name = document.getElementById("recommendation-name");   these wont word due to
// var quote = document.getElementById("recommendation-quote"); a reference error in
//                                                             pointing to a static part
//                                                            of the dom
// while(true == true){
// do some sort of sleep for 1 second
// timer++; !!!NOTE no real reason for a timer due to the fact that you can use
//a setTimeout method
// if (timer == 7) {
//change the values in photo, name, and quote
setInterval(switchEndorsement, 14000);

function switchEndorsement() {
    if (human == 7) {
        human = 0;
    } else {
        human++;
    }
    console.log(human);
    document.getElementById("recommendation-photo").style.background = people[human][0];
    document.getElementById("recommendation-photo").style.backgroundSize = "cover";
    document.getElementById("recommendation-photo").style.backgroundPosition = "top";
    document.getElementById("recommendation-photo").style.width = "100%";
    document.getElementById("recommendation-name").innerHTML = people[human][1];
    document.getElementById("recommendation-quote").innerHTML = people[human][2];
}
// timer = 0;
//resets timer to 0
// }
// console.log('hello');
// name.innerHTML = "HELLO";

//in the while loop while changing pictures have three seperate counters that iterate
//and go down after awhile
