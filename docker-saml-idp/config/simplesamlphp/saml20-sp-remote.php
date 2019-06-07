<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['http://10.5.0.6:9999/metadata/'] = array (
  'entityid' => 'http://10.5.0.6:9999/metadata/',
  'description' => 
  array (
    'en' => 'Savoir-faire Linux',
  ),
  'OrganizationName' => 
  array (
    'en' => 'Savoir-faire Linux',
  ),
  'name' => 
  array (
    'invalid' => '',
  ),
  'OrganizationDisplayName' => 
  array (
    'invalid' => '',
  ),
  'url' => 
  array (
    'invalid' => '',
  ),
  'OrganizationURL' => 
  array (
    'invalid' => '',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://10.5.0.6:9999/auth_saml/signin',
      'index' => 0,
      'isDefault' => true,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIENzCCAx+gAwIBAgIJAPd0Z/WpwfcjMA0GCSqGSIb3DQEBCwUAMIGxMQswCQYDVQQGEwJDQTEPMA0GA1UECAwGUXVlYmVjMREwDwYDVQQHDAhNb250cmVhbDEbMBkGA1UECgwSU2F2b2lyLWZhaXJlIExpbnV4MQ0wCwYDVQQLDARPZG9vMSUwIwYDVQQDDBxzdGFnaW5nLWdlc3RldmUudW1vbnRyZWFsLmNhMSswKQYJKoZIhvcNAQkBFhxzdXBwb3J0QHNhdm9pcmZhaXJlbGludXguY29tMB4XDTE4MDgzMDE3MjkxNloXDTI4MDgyNzE3MjkxNlowgbExCzAJBgNVBAYTAkNBMQ8wDQYDVQQIDAZRdWViZWMxETAPBgNVBAcMCE1vbnRyZWFsMRswGQYDVQQKDBJTYXZvaXItZmFpcmUgTGludXgxDTALBgNVBAsMBE9kb28xJTAjBgNVBAMMHHN0YWdpbmctZ2VzdGV2ZS51bW9udHJlYWwuY2ExKzApBgkqhkiG9w0BCQEWHHN1cHBvcnRAc2F2b2lyZmFpcmVsaW51eC5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDFENv1etOugsnjB/Sn1paHfuhfhz38rs8MBOpAwoqiD74gnCskIWVV5J4D7QRx+v2HHGPZxJhHIKxHVXRJyKZALcaSQnSoPIHmFhs/A+aYb6xjPLgVo+6boZL2KRQ5gWoSKiP24ae//pyTOJnkFBDJw1l8CLsS4vAS2jyuDVBgu1neHPn3xFlmuynbz/fv0SDuQ0LogmLbP5xBOQVJu199e11mGyjZVCeVv149wjjwif+voVGZR5m0A3Hk3KErLpZmG4hY2jlAOKuHE6AOM+EN8qH0m98mPWFPPSe+TEbqQzMp4djP0XGtmBFJjfjvUrXrWBBs/BNFDIoF116f/IbJAgMBAAGjUDBOMB0GA1UdDgQWBBTuOJKRdor1RFsCfgUmV2JLMDtW/TAfBgNVHSMEGDAWgBTuOJKRdor1RFsCfgUmV2JLMDtW/TAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQB3wAK+7pznrib0RQg92pf/48mxaxn7kiKhEm06r2Ja5RmfZsEnSh0ZslU7yL84SbA9lSC9eAWf4EKdll4v8c4SkLH/Xe+UDW58xiGAzGZtcKtBpuKfE3SVRTA8gAHB4hZu6WaZ6uUvmLaj+fzd6eY9a7avDDzflbRRikevRVD7GXB6R+7zCF3xDfWTks90JtwjDkJvfvCI5AnvGmbe/CBNdf21QX9qjEdDN9CElsQNFdTagAONxsDYDbftZ8BhoL9hjmprURrCYpB+iuMXLOnKzlnWakF6Nn7qL5/i655PpzwV724RIzD6OFS7SOKy3d9umiKistWI+SIltUD4IvIM',
    ),
  ),
  'validate.authnrequest' => true,
);
