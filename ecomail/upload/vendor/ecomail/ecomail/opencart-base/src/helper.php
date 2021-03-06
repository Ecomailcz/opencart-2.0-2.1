<?php

    namespace Ecomail;

    use \Config;

    class Helper {

        /**
         * @var Config
         */
        protected $config;

        public function setConfig( $config ) {
            $this->config = $config;
        }

        public function getConfigValue( $key ) {
            return $this->config->get( 'ecomail_' . $key );
        }

        public function getAPI() {

            require_once __DIR__ . '/api.php';

            $obj = new API();
            $obj->setAPIKey(
                    $this->getConfigValue( 'api_key' )
            );

            return $obj;
        }

        public function getCookieNameTrackStructEvent() {
            return 'Ecomail';
        }

    }