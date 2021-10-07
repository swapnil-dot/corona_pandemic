pipeline {

   agent any

   stages {
       stage('Build Dockerfile') {
           steps {
              sh 'echo "Running docker build and deploy commands.........."'
              sh "docker build -t php ."   
                    
           }
       }
      stage('Build Dockerfile') {
           steps {
              sh 'echo "Run the image"'
              sh "docker run -it -p 9000:9000 php"   
                    
           }
       }
}
