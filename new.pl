male(jerry).
male(stuart).
male(waren).
female(maryAlice).
female(kathe).
brother(jerry,stuart).
brother(jerry,kathe).
sister(kathe,jerry).
parent_of(waren,jerry).
parent_of(maryAlice,jerry).


cat(snow).
black_spots(snow).
dog(simba).
whitesports(simba).
own(mary,Pet) :- cat(Pet) , black_spots(Pet).
loves(Who,What) :- owns(Who,What).

father_of(john,peter).
father_of(john,jim).
father_of(kim,steve).
gender(jim,male).
student(jim,uni).

