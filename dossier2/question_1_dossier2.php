Importer des librairies   jsonify, flask et mysql 
instancier flask pour le module en cours 
renseigner  les informations de connection à la base de données mysql 
instancier mysql 
mapper la route '/satellite' avec la fonction getAppEmp()

ouvrir un curseur mysql
excuter la requete recuperant la liste des satellites de la table t_satellite
récupérer toutes les lignes  
récupérer toutes les colonnes 
dans la boucle for on parcourir toutes les lignes en creant un dictionnaire de cle (colonne) valeur qu'on ajoute 
dans la variable result
a la fin on ferme le curseur et on retourne la liste des satellites en json 



if __name__=='__main__'
 app.run 

 permet d'executer le fichier en  cours 


 Question 2 :
pour la route  '/satellite' , ce code génère et affiche la  liste des satellite au format json 






