 pipeline{
    agent any
    tools{
        maven 'mave_3_5_0'
    }
    stages{
        stages('Checkout Git branch'){
            steps{
                checkout scmGit(branches: [[name: '*/main']], extensions: [], userRemoteConfigs: [[credentialsId: 'faithly_api', url: 'https://github.com/mnurfilza/faithly-api']])
                sh 'mvn clean install'
            }
        }

        stages('Prune docker data'){
            steps{
                sh 'docker system prune -a volumes -f'
            }
        }

        stages('start container'){
            sh 'docker compose up -d --no-color --wait'
        }

        stages('migrate data'){
            sh '''
            docker exec -it mobile-api-laravel.test-1 bash
            php artisan optimize:clear
            php artisan migrate:fresh
            
            '''
        }


    }
}
