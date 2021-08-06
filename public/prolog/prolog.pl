hecho(nublado).
hecho(sol).
hecho(lluvia).

hecho(1).
hecho(2).
hecho(3).
hecho(4).

:-op(800,fx,si).
:-op(700,xfx,entonces).
:-op(300,xfy,o).
:-op(200,xfy,y).

si
nublado y 1
entonces
"Se recomienda checar si la tierra no esta muy humeda".
si
nublado y 2
entonces
"Si la tierra esta humeda esprar un dias mas para sembrar".

si
nublado y 3
entonces
"Esperar mas de tres dias para que la tierra no esta humeda".
si
nublado y 4
entonces
"Si la humdad persiste esperar una semana como minimo".

si
sol y 1
entonces
"Tomar la tempertura para ver las codiciones de sembrar".
si
sol y 2
entonces
"Puede sembrar con las idicaciones obtenidas".

si
sol y 3
entonces
"Observar los cambios de temperatura para tener una buena cosecha".
si
sol y 4
entonces
"Estar en contacto chequeo de la temperatura para la siembra".

si
lluvia y 1 
entonces
"Estar al tanto de los cultivos que vallan en orden".
si
lluvia y 2
entonces
"Tomar la tempertaura para estar al tanto".
si
lluvia y 3 
entonces
"Esperar al brote de la consecha".
si
lluvia y 4
entonces
"Cuidar que su siembra no tenga mucha rama si es el caso corta para tener buen creciemnto.".


clima:-
    findall(P,hecho(P),L),
    clima(L).

clima(L):-
    hecho_derivado(L,P),
    !,write(P),
    append([P],L,L1),
    clima(L1).


hecho_derivado(L,Conclusion):-
    si Condicion entonces Conclusion,
    \+ member(Conclusion,L),
    hecho_compuesto(L,Condicion).


hecho_compuesto(L,Condicion):-
    member(Condicion,L).

hecho_compuesto(L,Cond1 y Cond2):-
    hecho_compuesto(L,Cond1),
    hecho_compuesto(L,Cond2).