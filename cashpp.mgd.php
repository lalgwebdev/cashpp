<?php

return [
  0 => [
    'name' => 'cash',
    'entity' => 'payment_processor_type',
    'params' => [
      'version' => 3,
      'title' => 'Cash',
      'name' => 'cash',
      'description' => 'Payment processor for recording cash contributions',
      'user_name_label' => 'Username (not used)',
      'password_label' => 'Password (not used)',
      'url_site_default' => 'https://example.org',
      'url_site_test_default' => 'https://example.org',
      'class_name' => 'Payment_Manual',
      'billing_mode' => 1, // 1=form
      'payment_type' => 3, // 3=cash
      'is_recur' => 0,
    ],
  ],
  1 => [
    'name' => 'check',
    'entity' => 'payment_processor_type',
    'params' => [
      'version' => 3,
      'title' => 'Check',
      'name' => 'check',
      'description' => 'Payment processor for recording check contributions',
      'user_name_label' => 'Username (not used)',
      'password_label' => 'Password (not used)',
      'url_site_default' => 'https://example.org',
      'url_site_test_default' => 'https://example.org',
      'class_name' => 'Payment_Manual',
      'billing_mode' => 1, // 1=form
      'payment_type' => 4, // 4=check
      'is_recur' => 0,
    ],
  ],
];
