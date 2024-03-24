<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }


        body {
            background: url("services1.jpg") no-repeat;
            background-position: center;
            background-size: cover;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            max-width: 80rem;
        }

        .cols {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .col {
            width: calc(25% - 2rem);
            margin: 1rem;
            cursor: pointer;

        }

        .container {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        .front,
        .back {
            background-size: cover;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            background-position: center;
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            text-align: center;
            min-height: 280px;
            box-shadow: 0 0 10px solid blue;

            height: auto;
            border-radius: 10px;
            color: #fff;
            font-size: 1.5rem;
        }

        .back {
            background: #cedce7;
            background: -webkit-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: -o-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: linear-gradient(45deg, #cedce7 0%, #596a72 100%);
        }

        .front:after {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: '';
            display: block;
            opacity: .6;
            background-color: #000;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        .container:hover .front,
        .container:hover .back {
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .inner {
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            top: 50%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;
        }

        .container .back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container .front {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container:hover .back {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container:hover .front {
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .front .inner p {
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .front .inner p:after {
            content: '';
            width: 4rem;
            height: 2px;
            position: absolute;
            background: #C6D4DF;
            display: block;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: -.75rem;
        }

        .front .inner span {
            color: rgba(255, 255, 255, 0.7);
            font-family: 'Montserrat';
            font-weight: 300;
        }

        @media screen and (max-width: 64rem) {
            .col {
                width: calc(33.333333% - 2rem);
            }
        }

        @media screen and (max-width: 48rem) {
            .col {
                width: calc(50% - 2rem);
            }
        }

        @media screen and (max-width: 32rem) {
            .col {
                width: 100%;
                margin: 0 0 2rem 0;
            }
        }
        h1{
            color: white;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <h1>Services</h1>

        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(complaint_submission.jpg)">
                        <div class="inner">
                            <p>Complaint</p>
                            <span>Submission</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Complaint submission is essential for citizens to voice their concerns and report incidents.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(case_management.jpg)">
                        <div class="inner">
                            <p>Case</p>
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Case management in a crime/complaint management system ensures that each complaint is treated systematically, with accountability, and according to established procedures.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(follow_up.jpg)">
                              <div class="inner">
                                  <p>Complaint</p>
                                  <span>Follow-Up</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Complaint follow-up in a crime/complaint management system is crucial for ensuring accountability, and providing a structured approach to addressing grievances.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(statistics.jpg)">
                              <div class="inner">
                                  <p>Statistics</p>
                                  <span>Reports</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Statistics and reports generated by a crime/complaint management system are invaluable for law enforcement agencies, policymakers, and the public.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(storage.jpg)">
                              <div class="inner">
                                  <p>Secure</p>
                                  <span>Data Storage</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Secure data storage in a crime/complaint management system is fundamental to maintaining public trust and ensuring the confidentiality and integrity of sensitive information.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(support.jpg)">
                              <div class="inner">
                                  <p>24/7</p>
                                  <span>Support</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>24/7 support in a crime/complaint management system is essential to meet the needs of the public, offering a responsive and accessible means for reporting and addressing issues.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(anonymous.jpg)">
                              <div class="inner">
                                  <p>Anonymous</p>
                                  <span>Reporting</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Anonymous reporting plays a crucial role in encouraging individuals to report crimes or grievances when they may fear potential repercussions.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(feedback.jpg)">
                              <div class="inner">
                                  <p>View</p>
                                  <span>Feedback</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                  <p>Feedback is a valuable tool for maintaining public trust and ensuring that the system aligns with the needs and expectations of its users.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  
        </div>
    </div>
</body>

</html>