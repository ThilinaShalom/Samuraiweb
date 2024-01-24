
        .zoom-on-hover:hover {
            transform: scale(1.05);
            transition: transform 0.6s ease;
            background-color: #D90429;
        }

        .zoom-on-hover-nobg:hover{
          transform: scale(1.05);
          transition: transform 0.6s ease;
        }



        .rectangle-text-1,
        .rectangle-text-2 {
            font-family: 'Poppins', sans-serif;
            font-size: 4vw;
            font-weight: 600;
            margin-bottom: 10px; /* Adjusted margin */
            white-space: nowrap;
            overflow: hidden;
        }

        .rectangle-text-1 {
            animation: typewriter1 4s steps(40) infinite;
            font-size: 3.2vw;

        }

        .rectangle-text-1-1 {
            animation: typewriter1 4s steps(40) infinite;
        }

        .rectangle-text-2 {
            animation: none;
        }

        @keyframes typewriter1 {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .custom-card {
            width: 22rem;
            height: 22rem;
            background: #2B2D42;
            font-size: 1.313rem;
            margin-top: -35%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;


           
        }

        .custom-card-2 {
            width: 32rem;
            height: 21rem;
            border-radius:1.375rem;
            

        }
       .custom-card-3 {
            width: 25rem;
            height: 17rem;
            border-radius:1.375rem;
            background: #2B2D42;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
       }
        .custom-card-4{
            width: 110rem;
            height: 17rem;
            object-fit: cover;
            /*border-radius:1.375rem;*/
            margin-top: auto;
            margin-left:auto;
            margin-right: auto;
            margin-bottom: auto;
            align-items: center;

        }
        
        .custom-card-5{
            width: 90rem;
            height: 7.75rem;
            object-fit: cover;
            /*border-radius:1.375rem;*/
            margin-top: auto;
            margin-left:auto;
            margin-right: auto;
            margin-bottom: auto;
            align-items: center;
        }

        .custom-card-6{
            width:24.063rem; 
            height:25.5rem;
            border-radius:1rem;
            background: #2B2D42;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
        }
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        /* Footer Links Style */
        .footer a,
        .footer a:visited {
            color: white !important; 
            text-decoration: none; 
        }

        
        .footer a:hover {
            color: #D90429 !important; 
        }

        
        .footer ul.list-unstyled li {
            list-style: none;
        }

       
        .footer .d-flex a {
            color: white !important; 
            margin-right: 10px; 
        }

        
        .footer .d-flex a:hover {
            color: #D90429 !important; 
        }

        #spinner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1000;
            
        }

        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid #D90429;
            width: 40px;
            height: 40px;
            animation: spin .6s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
