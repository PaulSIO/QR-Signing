<?php
// ds_config.php
// 
// DocuSign configuration settings
$DS_CONFIG = [
    'quickstart' => 'true',
    'ds_client_id' => '85c62445-77e6-45ac-bb40-512774a657e2',  // The app's DocuSign integration key
    'ds_client_secret' => '9f034711-3ea3-43ab-bb86-8d7fcd337378', // The app's DocuSign integration key's secret
    'signer_email' => 'astru_p@etna-alternance.net',
    'signer_name' => 'Paul Astru',
    'app_url' => 'http://localhost:8080/public', // The url of the application.
    // Ie, the user enters  app_url in their browser to bring up the app's home page
    // Eg http://localhost/code-examples-php/public (no trailing slash) if the app is installed in a
    // development directory that is accessible via web server.
    // NOTE => You must add a Redirect URI of app_url/index.php?page=ds_callback to your Integration Key.
    'authorization_server' => 'https://account-d.docusign.com',
    'session_secret' => '{SESSION_SECRET}', // Secret for encrypting session cookie content
    'allow_silent_authentication' => true, // a user can be silently authenticated if they have an
    // active login session on another tab of the same browser
    'target_account_id' => false, // Set if you want a specific DocuSign AccountId, If false, the user's default account will be used.
    'demo_doc_path' => 'demo_documents',
    'doc_docx' => 'World_Wide_Corp_Battle_Plan_Trafalgar.docx',
    'doc_pdf' =>  'World_Wide_Corp_lorem.pdf',
    'doc_txt' =>  'Check_If_Approved.txt',
    // Payment gateway information is optional
    'gateway_account_id' => '{GATEWAY_ACCOUNT_ID}',
    'gateway_name' => "stripe",
    'gateway_display_name' => "Stripe",
    'github_example_url' => 'https://github.com/docusign/code-examples-php/tree/master/src/Controllers/Examples',
    'documentation' => false
];

$JWT_CONFIG = [
    'ds_client_id' => '85c62445-77e6-45ac-bb40-512774a657e2', // The app's DocuSign integration key
    'authorization_server' => 'account-d.docusign.com',
    "ds_impersonated_user_id" => '7f9d2259-db33-4d25-843b-3d796fa356d2',  // the id of the user
    "private_key_file" => "./private.key", // path to private key file
];

$EXAMPLES_API_TYPE = [
    'Rooms' => false,
    'ESignature' => true,
    'Click' => false,
    'Monitor' => false,
    'Admin' => false
];

$GLOBALS['DS_CONFIG'] = $DS_CONFIG;
$GLOBALS['JWT_CONFIG'] = $JWT_CONFIG;
$GLOBALS['EXAMPLES_API_TYPE'] = $EXAMPLES_API_TYPE;
