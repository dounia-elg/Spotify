<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projet de Plateforme Musicale</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Header Section -->
  <header class="bg-blue-600 text-white py-6">
    <div class="container mx-auto px-4">
      <h1 class="text-4xl font-bold text-center">Plateforme Musicale</h1>
      <p class="text-center mt-2">Une expérience musicale fluide et personnalisée</p>
    </div>
  </header>

  <!-- Project Context Section -->
  <section class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Contexte du Projet</h2>
    <p class="mb-4">
      Ce projet vise à créer une plateforme musicale interactive permettant aux utilisateurs de découvrir, organiser et écouter de la musique. L'objectif est de fournir une expérience utilisateur fluide et accessible, tout en offrant des fonctionnalités adaptées aux différents rôles des utilisateurs.
    </p>
  </section>

  <!-- Objectives Section -->
  <section class="bg-white py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold mb-4">Objectifs du Projet</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">Expérience Utilisateur</h3>
          <p>Offrir une interface fluide et accessible permettant aux utilisateurs d'interagir facilement avec la plateforme.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">Gestion des Utilisateurs</h3>
          <p>Permettre aux invités, utilisateurs enregistrés, artistes et administrateurs de profiter de fonctionnalités adaptées à leurs rôles respectifs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Features Section -->
  <section class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Principales Fonctionnalités</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
        <h3 class="text-xl font-semibold mb-2">Gestion des Utilisateurs</h3>
        <p>Fonctionnalités adaptées pour les invités, utilisateurs enregistrés, artistes et administrateurs.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
        <h3 class="text-xl font-semibold mb-2">Gestion des Playlists</h3>
        <p>Création, modification et gestion des playlists avec visibilité publique ou privée.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
        <h3 class="text-xl font-semibold mb-2">Authentification et Sécurité</h3>
        <p>Système d'inscription et de connexion sécurisé avec contrôle d'accès basé sur les rôles.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
        <h3 class="text-xl font-semibold mb-2">Streaming Musical</h3>
        <p>Écoute de chansons via un lecteur intégré.</p>
      </div>
    </div>
  </section>

  <!-- Technical Architecture Section -->
  <section class="bg-white py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold mb-4">Architecture Technique</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">MVC Architecture</h3>
          <p>Le projet suit l'architecture Modèle-Vue-Contrôleur pour une séparation claire des responsabilités.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">Autoloading avec Composer</h3>
          <p>Simplifie le chargement des classes pour une gestion efficace des dépendances.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">Routing Dynamique</h3>
          <p>Utilisation d'un routeur personnalisé pour mapper les URLs vers les contrôleurs correspondants.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
          <h3 class="text-xl font-semibold mb-2">Base de Données</h3>
          <p>Stockage des informations des utilisateurs, chansons, playlists, etc.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-blue-600 text-white py-6 mt-8">
    <div class="container mx-auto px-4 text-center">
      <p>&copy; 2023 Plateforme Musicale. Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>