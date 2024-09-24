pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                // Pull the latest code from the GitHub repository
                git branch: 'main', url: 'https://github.com/abdullahshah10/Wordpress-Project.git'
            }
        }

        stage('Deploy to EC2') {
            steps {
                echo 'Starting SCP transfer...'
                // Run SCP command directly
                bat '''
                timeout /t 300 /nobreak > nul
                scp -v -i D:\\Work\\Keys\\WordpressProjectKey.pem -r * ubuntu@3.81.216.116:/var/www/html/
                '''
                echo 'SCP transfer completed.'
            }
        }

        stage('Test on EC2') {
            steps {
                echo 'Running PHP syntax check on EC2...'
                // SSH into EC2 and run PHP syntax check
                bat '''
                ssh -i D:\\Work\\Keys\\WordpressProjectKey.pem ubuntu@3.81.216.116 "php -l /var/www/html/index.php"
                '''
            }
        }
    }

    post {
        success {
            echo 'Deployment successful and tests passed!'
        }
        failure {
            echo 'Deployment failed or tests failed!'
        }
    }
}