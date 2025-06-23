# 🎉 Gestionnaire d'Événements

Une application web de gestion d'événements développée avec PHP et MySQL.

## ✨ Fonctionnalités

- 🎫 Gestion complète d'événements
- 👥 Système d'utilisateurs avec authentification
- 🎯 Catégorisation des événements
- 📅 Réservations en ligne
- 📱 Interface responsive

## 🛠 Prérequis

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## 🚀 Installation

1. **Clonez le dépôt** :
```bash
git clone https://github.com/MaxNumerique/Evenements.git
cd Evenements
```

2. **Lancez l'application** :
```bash
docker compose up -d
```

3. **Accédez aux services** :
   - 🌐 **Application** : http://localhost:8080
   - 🗄️ **PHPMyAdmin** : http://localhost:8081 (root/root)

## 📁 Structure du projet

```
Evenements/
├── 🐳 docker-compose.yml    # Configuration Docker
├── 🗄️ init.sql             # Initialisation base de données
├── ⚙️ .env                 # Variables d'environnement
├── 🌐 index.php            # Page d'accueil
├── 📁 assets/              # CSS, JS, images
├── 📁 config/              # Configuration PHP
├── 📁 pages/               # Pages principales
└── 📁 templates/           # Templates réutilisables
```

## 🗄️ Base de données

La base de données `evenements` sera automatiquement initialisée avec :

- **evenements** : Liste des événements
- **categorie** : Catégories d'événements  
- **utilisateur** : Gestion des utilisateurs
- **organisateur** : Informations organisateurs
- **participer** : Gestion des participations

## 🛠 Développement

### Commandes utiles

```bash
# Démarrer les services
docker compose up -d

# Voir les logs
docker compose logs -f web

# Arrêter les conteneurs
docker compose down

# Nettoyer complètement (supprime les données)
docker compose down -v

# Redémarrer un service
docker compose restart web
```

### Debugging

```bash
# Vérifier l'état
docker compose ps

# Accéder au conteneur web
docker compose exec web bash

# Tester la connexion DB
docker compose exec web php debug.php
```

## 🚀 Déploiement

### Options disponibles
- **Railway** (configuré avec `railway.toml`)
- **Heroku**, **DigitalOcean**, **AWS**
- **VPS traditionnel**

### Variables d'environnement production

```env
MYSQLHOST=your-production-host
MYSQLPORT=3306
MYSQLDATABASE=evenements
MYSQLUSER=your-user
MYSQL_ROOT_PASSWORD=your-secure-password
```

## 🤝 Contribution

1. Fork le projet
2. Créez votre branche : `git checkout -b feature/nouvelle-fonctionnalite`
3. Committez : `git commit -m "Ajout: nouvelle fonctionnalité"`
4. Push : `git push origin feature/nouvelle-fonctionnalite`
5. Ouvrez une Pull Request

## 📝 Licence

Ce projet est sous licence MIT.

---

**Développé avec ❤️ par [MaxNumerique](https://github.com/MaxNumerique)**
```

Cette version simplifiée inclut :

✅ **Emojis** pour une meilleure lisibilité
✅ **Sections essentielles** bien organisées
✅ **Commandes pratiques** pour le développement
✅ **Structure claire** du projet
✅ **Guide de déploiement** concis
✅ **Informations de debugging** utiles

Le README est maintenant plus moderne et facile à lire ! 🚀
        