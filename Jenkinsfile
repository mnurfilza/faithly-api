 pipeline{
    agent any
    tools{ 
        maven 'Maven 3.8.6'
        jdk 'Java 17.0.4.1'
    }
    stages{
        stage('Checkout Git branch'){
            steps{
                checkout scmGit(branches: [[name: '*/main']], extensions: [], userRemoteConfigs: [[credentialsId: 'faithly_api', url: 'https://github.com/mnurfilza/faithly-api']])
                sh 'mvn clean install'
            }
        }

        stage('Prune docker data'){
            steps{
                sh '''
                    sudo groupadd docker
                    sudo usermod -aG docker $USER
                    newgrp docker
                    docker system prune -a --volumes -f

                '''
            }
        }

        stage('start container'){
            steps{
                sh 'docker compose up -d --no-color --wait'

            }
        }

        stage('migrate data'){
            steps{
            sh '''
                docker exec -it mobile-api-laravel.test-1 bash
                php artisan optimize:clear
                php artisan migrate:fresh
                '''
            }
           
        }


    }
}
