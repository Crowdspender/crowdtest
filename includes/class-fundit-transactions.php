<?php
class Fundit_Transactions {
    public static function log_transaction($user_id, $amount, $type) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'fundit_transactions';

        $wpdb->insert($table_name, [
            'user_id' => $user_id,
            'amount' => $amount,
            'type' => $type,
            'created_at' => current_time('mysql')
        ]);
    }
}
?>