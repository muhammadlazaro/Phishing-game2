pipeline {
    agent any

    environment {
        CI_ENV = "testing"
        PHP_VERSION = "8.1"
        SONAR_TOKEN = credentials('SONAR_TOKEN')
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/muhammadlazaro/Phishing-game2.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Static Code Analysis (SAST)') {
            steps {
                bat '''
                    sonar-scanner ^
                      -Dsonar.projectKey=phishing_game ^
                      -Dsonar.sources=./app ^
                      -Dsonar.php.version=8.1 ^
                      -Dsonar.host.url=http://localhost:9000 ^
                      -Dsonar.login=%SONAR_TOKEN%
                '''
            }
        }

        stage('Unit Test') {
            steps {
                bat 'vendor\\bin\\phpunit tests'
            }
        }

        stage('Start ZAP') {
            steps {
                bat '''
                    start "" "C:\\Program Files\\OWASP\\Zed Attack Proxy\\zap.bat" -daemon -port 8481 -config api.key=92j7sfl7otefrl2b6ralqd9dl4
                    timeout /t 30
                '''
            }
        }

        stage('Dynamic Analysis (DAST - ZAP)') {
            steps {
                bat 'python test_zap.py'
            }
        }

        stage('Report') {
            steps {
                junit 'tests\\_output\\*.xml'
            }
        }
    }

    post {
        success {
            echo '✅ Pipeline berhasil'
        }
        failure {
            echo '❌ Pipeline gagal (notifikasi email dinonaktifkan sementara)'
        }
    }
}
