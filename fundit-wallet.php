<?php
/*
Plugin Name: Fundit Wallet
Description: A wallet system for managing Fundits in CrowdSpender.
Version: 1.0
Author: CrowdSpender Team
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include core plugin files
include_once plugin_dir_path(__FILE__) . 'includes/class-fundit-wallet.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-fundit-transactions.php';

// Activation hook
function fundit_wallet_activate() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-fundit-wallet.php';
    Fundit_Wallet::install();
}
register_activation_hook(__FILE__, 'fundit_wallet_activate');
?>