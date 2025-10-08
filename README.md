## DELPHINE MARTIN
J'ai remis le TP en retard, car je n'arrivais pas à me rendre au screen, mais j'ai corrigé mes erreurs aujourd'hui 08/10/2025 et remis à cette date aussi sur Léa, j'assumes les points de retard!

# TP Déploiement Docker avec Ansible

## Description du projet
Ce projet a pour objectif de déployer une application web complète sur une VM Ubuntu distante en utilisant **Ansible** et **Docker Compose**.  

L'application comprend :  
- Un serveur **Nginx** pour gérer les requêtes HTTP.  
- Un conteneur **PHP-FPM** pour exécuter le code PHP.  
- Une base de données **MySQL** avec persistance via un volume Docker.  

Le playbook Ansible crée automatiquement les dossiers nécessaires, copie les fichiers de configuration, et lance les conteneurs Docker.

---

## Structure du projet sur la VM

/home/efcs
├─ conf/ # Configuration Nginx (default.conf)
├─ html/ # Fichiers PHP (index.php)
├─ php/ # Dockerfile PHP-FPM (Dockerfile)
├─ vars/ # Variables chiffrées avec ansible vault (secret-variables.yaml)
├─ compose.yaml # Fichier Docker Compose
├─ deploy.yaml # Playbook Ansible
└─ README.md # Ce fichier

## Commandes importantes 
Mot de passe vault : secret

Exécuter le playbook Ansible pour déployer et lancer les conteneurs :
``` 
ansible-playbook deploy.yaml -t start
```


Pour arrêter les conteneurs :
``` 
ansible-playbook deploy.yaml -t stop
``` 

Pour relancer après modification des fichiers :
``` 
ansible-playbook deploy.yaml -t restart
``` 

FIGURE 1 - PING / CONNEXION SSH
<img width="868" height="255" alt="image" src="https://github.com/user-attachments/assets/48011721-9faf-409a-be25-08e3787b8d5f" />

FIGURE 2 - INSTALLATION DOCKER
<img width="870" height="685" alt="image" src="https://github.com/user-attachments/assets/492ac8bd-7e44-4944-add8-ed83abe021da" />

FIGURE 3 - CRÉATION RÉPERTOIRE ET DOSSIERS
<img width="908" height="695" alt="image" src="https://github.com/user-attachments/assets/7aa4a921-8ae2-493e-9088-556ffa116d47" />

FIGURE 4 - COPIE DE FICHIERS
<img width="906" height="689" alt="image" src="https://github.com/user-attachments/assets/4fee339b-f398-48a4-ab79-4087a9255df9" />

FIGURE 5 - PAGE WEB AVEC CONNEXION À LA BD
<img width="1177" height="620" alt="image" src="https://github.com/user-attachments/assets/deb1b0de-17fc-439e-b45d-7126680764ba" />

FIGURE 6 - JOURNAUX DU SERVEUR WEB
<img width="903" height="641" alt="image" src="https://github.com/user-attachments/assets/e22cdec8-d546-4750-9150-56d040e1234e" />


