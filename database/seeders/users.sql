
--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@exemple.com', NULL, '$2y$12$eGTpz6Qk8.2q9zB3XKWi.OoC4VcejI63OD9D7Zl/lSq.lJHJxCodu', NULL, '2024-02-09 15:34:40', '2024-02-09 15:34:40');
COMMIT,
(, 'Manon', 'manonphi@hotmail.fr', NULL, '$2y$12$eGTpz6Qk8.2q9zB3XKWi.OoC4VcejI63OD9D7Zl/lSq.lJHJxCodu', NULL, '2024-02-09 15:34:40', '2024-02-09 15:34:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
