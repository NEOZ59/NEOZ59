M1 = [1, 1, 1] 
M2 = [1, 1, 1]
M3 = [1, 1, 1]
Mgrille = [M1, M2, M3]  #Grille morpion

P1 = [2,2,2,2,2,2,2]
P2 = [2,2,2,2,2,2,2]
P3 = [2,2,2,2,2,2,2]
P4 = [2,2,2,2,2,2,2]
P5 = [2,2,2,2,2,2,2]
P6 = [2,2,2,2,2,2,2]
Pgrille = [P1, P2, P3, P4, P5, P6]  #Grille puissance 4


def Maffichage (a) :  #Affichage morpion
  for i in range (3) :
    print (a[i][0], a[i][1], a[i][2])
  
def Paffichage (b) : #Affichage
  for i in range (6):
    print (b[i][0], b[i][1], b[i][2], b[i][3], b[i][4], b[i][5], b[i][6])

def Mvidé (a) :  #Vidé morpion
  for i in range (3) :
    for j in range (3) :
      a[i][j] = 1

def Pvidé (b) : #Vidé puissance 4
  for i in range (6):
    for j in range (7):
      b[i][j] = 2

def Mjouer (morpion) :  #Jouer morpion
  Mvidé (morpion)
  Mtour = 0
  Mjoueur = "o"
  Mposs = 0
  while Mtour != 9 :
    Mtour += 1
    print("joueur : ", Mjoueur)
    print("tour : ", Mtour)
    Maffichage (morpion)
    Mposs = 0
    Mcol = int(input("Choisir entre la colonne 0, 1 ou 2. "))
    Mlig = int(input("Choisir entre la ligne 0, 1 ou 2. "))
    while Mposs != 1 :
      if  Mcol < 0 or Mcol > 2 :
        Maffichage (morpion)
        Mcol = int(input("On a dit de choisir entre la colonne 0, 1 et 2. "))
      elif Mlig < 0 or Mlig > 2 :
        Maffichage (morpion)
        Mlig = int(input("On a dit de choisir entre la ligne 0, 1 et 2. "))
      elif morpion[Mlig][Mcol] == "o" or morpion[Mlig][Mcol] == "x" :
        Maffichage (morpion)
        print("Choisi une position pas utilisé s'il te plait. ")
        Mcol = int(input("Choisir entre la colonne 0, 1 et 2. "))
        Mlig = int(input("Choisir entre la ligne 0, 1 et 2. "))
      elif Mcol >= 0 and Mcol <= 2 and Mlig >= 0 and Mlig <= 2 and morpion[Mlig][Mcol] != "o" and morpion[Mlig][Mcol] != "x":
        Mposs = 1
        morpion[Mlig][Mcol] = Mjoueur
        if Mjoueur == "o" :
          Mjoueur = "x"
        elif Mjoueur == "x" :
          Mjoueur = "o"
      else :
        print ('Erreur')
    if Mvictoireo() == 3 :
        Mtour = 9
        print ('Victoire O')
        Maffichage (morpion)
    elif Mvictoirex() == 2 :
        Mtour = 9
        print ('Victoire X')
        Maffichage (morpion)
    else :
        print ('Tour suivant')
        print ('************')
  menu()

def Pjouer (Puissance) :
  Pvidé(Pgrille)
  Ptour = 0
  Pjoueur = "R"
  Pposs = 0
  while Ptour != 9 :
    Ptour += 1
    print("joueur : ", Pjoueur)
    print("tour : ", Ptour)
    Maffichage (Puissance)
    Pposs = 0
    while Pposs == 0 :
      Pcol = int(input("Choisir entre la colonne 0, 1, 2, 3, 4, 5, 6"))
      if Pcol < 0 or Pcol > 6 :
        print ("Colonne inconnu !")
        

def menu () :
  print("*" * 10)
  print("Bienvenue")
  print("")
  print("1 : jouer")
  print("entrée : quitter")
  print("*" * 10)
  suite = input("choix: ")
  if (suite == '1') :
    print("jouez")
    Mjouer(Mgrille)
  else :
    print("fini")

def Mvictoireo () : #Victoire morpion o
    if Mgrille[0][0] == 'o' and Mgrille[1][0] == 'o' and Mgrille[2][0] == 'o' :
        return 3
    elif Mgrille[0][1] == 'o' and Mgrille[1][1] == 'o' and Mgrille[2][1] == 'o' :
        return 3
    elif Mgrille[0][2] == 'o' and Mgrille[1][2] == 'o' and Mgrille[2][2] == 'o' :
        return 3
    elif Mgrille[0][0] == 'o' and Mgrille[0][1] == 'o' and Mgrille[0][2] == 'o' :
        return 3
    elif Mgrille[1][0] == 'o' and Mgrille[1][1] == 'o' and Mgrille[1][2] == 'o' :
        return 3
    elif Mgrille[2][0] == 'o' and Mgrille[2][1] == 'o' and Mgrille[2][2] == 'o' :
        return 3
    elif Mgrille[0][0] == 'o' and Mgrille[1][1] == 'o' and Mgrille[2][2] == 'o' :
        return 3
    elif Mgrille[0][2] == 'o' and Mgrille[1][1] == 'o' and Mgrille[2][0] == 'o' :
        return 3

def Mvictoirex () : #Victoire morpion x
    if Mgrille[0][0] == 'x' and Mgrille[1][0] == 'x' and Mgrille[2][0] == 'x' :
        return 2
    elif Mgrille[0][1] == 'x' and Mgrille[1][1] == 'x' and Mgrille[2][1] == 'x' :
        return 2
    elif Mgrille[0][2] == 'x' and Mgrille[1][2] == 'x' and Mgrille[2][2] == 'x' :
        return 2
    elif Mgrille[0][0] == 'x' and Mgrille[0][1] == 'x' and Mgrille[0][2] == 'x' :
        return 2
    elif Mgrille[1][0] == 'x' and Mgrille[1][1] == 'x' and Mgrille[1][2] == 'x' :
        return 2
    elif Mgrille[2][0] == 'x' and Mgrille[2][1] == 'x' and Mgrille[2][2] == 'x' :
        return 2
    elif Mgrille[0][0] == 'x' and Mgrille[1][1] == 'x' and Mgrille[2][2] == 'x' :
        return 2
    elif Mgrille[0][2] == 'x' and Mgrille[1][1] == 'x' and Mgrille[2][0] == 'x' :
        return 2

menu()