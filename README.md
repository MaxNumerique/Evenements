# Projet Événements

Une application web de gestion d'événements développée avec PHP et MySQL.

## Prérequis

- Docker
- Docker Compose

## Installation

1. Clonez le dépôt :
```bash
git clone https://github.com/votre-username/Evenements.git
cd Evenements
```

2. Lancez les conteneurs Docker :
```bash
docker compose up -d
```

L'application sera accessible sur :
- Application Web : http://localhost:8080
- PHPMyAdmin : http://localhost:8081
  - Utilisateur : root
  - Mot de passe : root

## Structure du projet

- `docker-compose.yml` : Configuration des conteneurs Docker
- `init.sql` : Script d'initialisation de la base de données
- `.env` : Variables d'environnement pour la configuration

## Base de données

La base de données sera automatiquement initialisée avec les tables suivantes :
- events : Liste des événements
- categorie : Catégories d'événements
- utilisateur : Gestion des utilisateurs
- organisateur : Informations sur les organisateurs
- participer : Gestion des participations

## Développement

Pour arrêter les conteneurs :
```bash
docker compose down
```

Pour arrêter les conteneurs et supprimer les données :
```bash
docker compose down -v
```

## Contribution

1. Fork le projet
2. Créez votre branche (`git checkout -b feature/AmazingFeature`)
3. Committez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request
