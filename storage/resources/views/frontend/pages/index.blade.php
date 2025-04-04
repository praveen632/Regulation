@extends('frontend.layouts.master') @section('content')

<style>
    .showReg {
        display: block;
    }

    .hideReg {
        display: none;
    }
</style>
<div
    class="bg banner"
    style="
        background-image: url('https://www.startupfino.com/assets/images/banner-bg.png');
    "
>
    <section class="banner-slider">
        <div class="container">
            <div class="bitmap">
                <img
                    src="{{asset('frontend/assets/images/Bitmap.png')}}"
                    class="desk_none"
                />
                <img
                    src="{{asset('frontend/assets/images/new_480.jpg')}}"
                    class="mobile_block"
                />
                <div class="banner-txt">
                    <h1>
                        Startups Looking for <br /><b>Registering </b> your
                        business?
                    </h1>
                    <a
                        href="https://www.startupfino.com/services/company-registration"
                        >Private Limited</a
                    >
                    <a
                        href="https://www.startupfino.com/services/limited-liability-partnership-llp-registration"
                        >LLP</a
                    >
                    <a
                        href="https://www.startupfino.com/services/partnership-firm-registration"
                        >Partnership Firm</a
                    >
                    <a
                        href="https://www.startupfino.com/services/one-person-company-opc-registration"
                        >One Person Company</a
                    >
                    <a
                        href="https://www.startupfino.com/services/section-8-company-registration"
                        >Section-8 Company</a
                    ><br />
                    <a
                        class="view-more"
                        href="https://www.startupfino.com/business_incorporation"
                        >View More</a
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="banner-slider">
        <div class="container">
            <div class="bitmap">
                <img
                    src="{{asset('frontend/assets/images/IP.png')}}"
                    class="desk_none"
                />
                <img
                    src="{{asset('frontend/assets/images/IP_mob.jpg')}}"
                    class="mobile_block"
                />
                <div class="banner-txt">
                    <h1>
                        Startups Looking for <br /><b>Protecting </b> your
                        brand?
                    </h1>
                    <a
                        href="https://www.startupfino.com/services/trademark-registration"
                        >Trademark Registration</a
                    >
                    <a
                        href="https://www.startupfino.com/services/trademark-objection"
                        >Trademark Objection</a
                    >
                    <a
                        href="https://www.startupfino.com/services/trademark-assignment"
                        >Trademark Assignment</a
                    >
                    <a
                        href="https://www.startupfino.com/services/patent-registration"
                        >Patent Registration</a
                    >
                    <a
                        href="https://www.startupfino.com/services/copyright-registration"
                        >Copyright Registration</a
                    ><br />
                    <a
                        class="view-more"
                        href="https://www.startupfino.com/ipr_trademark"
                        >View More</a
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="banner-slider">
        <div class="container">
            <div class="bitmap">
                <img
                    src="{{asset('frontend/assets/images/License-Banner.png')}}"
                    class="desk_none"
                />
                <img
                    src="{{asset('frontend/assets/images/License-Banner_mob.jpg')}}"
                    class="mobile_block"
                />
                <div class="banner-txt">
                    <h1>
                        Startups Looking for <br /><b>Licenses</b> for your
                        business?
                    </h1>
                    <a
                        href="https://www.startupfino.com/services/fssai-food-license"
                        >FSSAI Registration</a
                    >
                    <a
                        href="https://www.startupfino.com/services/shop-establishment-registration"
                        >Shop & Establishment Registration</a
                    >
                    <a
                        href="https://www.startupfino.com/services/epf-registration"
                        >PF Registration</a
                    >
                    <a
                        href="https://www.startupfino.com/services/udyog-aadhar-msme-registration"
                        >MSME Registration</a
                    >
                    <a href="https://www.startupfino.com/services/startup-india-registration"
                        >Startup India Registration</a
                    ><br />
                    <a
                        class="view-more"
                        href="https://www.startupfino.com/licences"
                        >View More</a
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="banner-slider">
        <div class="container">
            <div class="bitmap">
                <img
                    src="{{asset('frontend/assets/images/Fundraising-Banner.png')}}"
                    class="desk_none"
                />
                <img
                    src="{{asset('frontend/assets/images/Fundraising-Banner_mob.jpg')}}"
                    class="mobile_block"
                />
                <div class="banner-txt">
                    <h1>
                        Startups Looking for <br /><b>Fundraising </b> for your
                        business?
                    </h1>
                    <a
                        href="https://www.startupfino.com/services/fundraising-vcs-hnis"
                        >Fundraising Services</a
                    >
                    <a
                        href="https://www.startupfino.com/services/term-sheet-shareholders-agreement"
                        >Term Sheet/SHA</a
                    >
                    <a
                        href="https://www.startupfino.com/services/startup-grants-loans"
                        >Startup Grants/Loans</a
                    >
                    <a
                        href="https://www.startupfino.com/services/valuation-certificate"
                        >Valuation Certificate</a
                    >
                    <a href="https://www.startupfino.com/services/due-diligence"
                        >Due Diligence</a
                    ><br />
                    <a
                        class="view-more"
                        href="https://www.startupfino.com/fundraising_services"
                        >View More</a
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="banner-slider">
        <div class="container">
            <div class="bitmap">
                <img
                    src="{{asset('frontend/assets/images/Compliance-Banner.png')}}"
                    class="desk_none"
                />
                <img
                    src="{{asset('frontend/assets/images/IP_mob.jpg')}}"
                    class="mobile_block"
                />
                <div class="banner-txt">
                    <h1>
                        Startups Looking for <br /><b>Compliances </b> for your
                        business?
                    </h1>
                    <a
                        href="https://www.startupfino.com/services/accounting-and-bookkeeping-services"
                        >Accounting Services</a
                    >
                    <a
                        href="https://www.startupfino.com/services/gst-compliance"
                        >GST Compliance</a
                    >
                    <a
                        href="https://www.startupfino.com/services/income-tax-compliance"
                        >Income Tax Compliance</a
                    >
                    <a
                        href="https://www.startupfino.com/services/epf-compliance"
                        >EPF Compliance</a
                    >
                    <a
                        href="https://www.startupfino.com/services/labour-law-compliance"
                        >Labour Compliance</a
                    ><br />
                    <a
                        class="view-more"
                        href="https://www.startupfino.com/accounting_compliance"
                        >View More</a
                    >
                </div>
            </div>
        </div>
    </section>
</div>
<div class="sw fusion-flip-boxes">
    <div class="container">
        <div class="row offer">
            <div class="col-md-12">
                <h2>Our Offerings in the Startup Journey</h2>
            </div>
        </div>

        <div class="row service-slider">
            <div class="fusion-flip-box-wrapper fusion-column col-md-12">
                <div class="fusion-flip-box flip-right" tabindex="0">
                    <div class="flip-box-inner-wrapper">
                        <div class="flip-box-front">
                            <div class="flip-box-front-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-1.png')}}"
                                    />
                                </div>
                                <h3>Start-Up</h3>
                                <p>
                                    Startupfino helps startups to start their
                                    business journey right from registering
                                    their business and to obtain the requisite
                                    business licenses.
                                </p>
                                <span class="view-service" href=""
                                    >View Services
                                    <i
                                        class="fa fa-long-arrow-right"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <div class="flip-box-back-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-1.png')}}"
                                    />
                                </div>
                                <h3>Start-Up</h3>
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/business_incorporation"
                                            >Business Incorporation
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/tax_registrations"
                                            >Tax Registrations
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/licences"
                                            >Licences
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/international_business_setup"
                                            >International Business Setup
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fusion-flip-box-wrapper fusion-column col-md-12">
                <div class="fusion-flip-box flip-right" tabindex="0">
                    <div class="flip-box-inner-wrapper">
                        <div class="flip-box-front">
                            <div class="flip-box-front-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-2.png')}}"
                                    />
                                </div>
                                <h3>IP & Legal</h3>
                                <p>
                                    Startupfino helps startups to protect their
                                    Intellectual Property and legal rights like
                                    helping them to file trademark and to draft
                                    many legal agreements.
                                </p>
                                <span class="view-service" href=""
                                    >View Services
                                    <i
                                        class="fa fa-long-arrow-right"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <div class="flip-box-back-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-2.png')}}"
                                    />
                                </div>
                                <h3>IP & Legal</h3>
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/ipr_trademark"
                                            >IPR & Trademark
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/legal_agreements"
                                            >Legal Agreements
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fusion-flip-box-wrapper fusion-column col-md-12">
                <div class="fusion-flip-box flip-right" tabindex="0">
                    <div class="flip-box-inner-wrapper">
                        <div class="flip-box-front">
                            <div class="flip-box-front-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-3.png')}}"
                                    />
                                </div>
                                <h3>Fundraising</h3>
                                <p>
                                    Startupfino helps startups to raise money
                                    from the investors and to manage the end to
                                    end Due Diligence, secretarial and legal
                                    processes during fundraise.
                                </p>
                                <span class="view-service" href=""
                                    >View Services
                                    <i
                                        class="fa fa-long-arrow-right"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <div class="flip-box-back-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-3.png')}}"
                                    />
                                </div>
                                <h3>Fundraising</h3>
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/fundraising_services"
                                            >Fundraising Services
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/fundraising_compliance"
                                            >Fundraising Compliance
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fusion-flip-box-wrapper fusion-column col-md-12">
                <div class="fusion-flip-box flip-right" tabindex="0">
                    <div class="flip-box-inner-wrapper">
                        <div class="flip-box-front">
                            <div class="flip-box-front-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-4.png')}}"
                                    />
                                </div>
                                <h3>Compliance</h3>
                                <p>
                                    Startupfino helps startups to manage their
                                    accounts on the real time basis with
                                    complete visibility to its founders and to
                                    manage all legal compliances.
                                </p>
                                <span class="view-service" href=""
                                    >View Services
                                    <i
                                        class="fa fa-long-arrow-right"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <div class="flip-box-back-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-4.png')}}"
                                    />
                                </div>
                                <h3>Compliance</h3>
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/accounting_compliance"
                                            >Accounting & Compliance
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/secratarial_compliance"
                                            >Secratarial Compliance
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/reporting"
                                            >Reporting
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/statutory_refunds"
                                            >Statutory Refunds
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fusion-flip-box-wrapper fusion-column col-md-12">
                <div class="fusion-flip-box flip-right" tabindex="0">
                    <div class="flip-box-inner-wrapper">
                        <div class="flip-box-front">
                            <div class="flip-box-front-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-5.png')}}"
                                    />
                                </div>
                                <h3>Close-Down</h3>
                                <p>
                                    Startupfino helps startups to close down
                                    their business without any legal headaches.
                                </p>
                                <span class="view-service" href=""
                                    >View Services
                                    <i
                                        class="fa fa-long-arrow-right"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <div class="flip-box-back-inner">
                                <div class="service-icon">
                                    <img
                                        src="{{asset('frontend/assets/images/service-icon-5.png')}}"
                                    />
                                </div>
                                <h3>Close-Down</h3>
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/tax_registration_closure"
                                            >Tax Registration Closure
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.startupfino.com/entity_closure"
                                            >Entity Closure
                                            <i
                                                class="fa fa-long-arrow-right"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="sw coma desk_none"
    style="
        background-image: url('{{asset('frontend/assets/images/Rectangle.png')}}');
    "
>
    <div class="container">
        <div class="row eco-system">
            <div class="col-md-12">
                <h2>Startup eco-system loves to talk about us!</h2>
            </div>
        </div>
    </div>
    <div class="center">
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Ishant Sharma</h3>
                    <h4>Indian Cricketer</h4>
                    <p>
                        Startupfino is managing my accounts and its such a
                        relaxed and smooth journey so far , I dont have to worry
                        about timely execution of the work . They manage my
                        invoicing, finances and compliances in a efficient way.
                        I wish karan and team all the very best for the future
                        of this startup .
                    </p>
                    <!-- <img src="https://www.startupfino.com/assets/images/logo13.jpg"> -->
                </div>
                <div class="right-side">
                    <img
                        src="{{asset('frontend/assets/images/Ishant-Sharma-1.jpg')}}"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Abhishek Bansal</h3>
                    <h4>CEO, ShadowFax</h4>
                    <p>
                        Startupfino provided Shadowfax with an end to end
                        support in managing compliance and accounts during our
                        early stage and helped us transition to a full fledged
                        finance team post our multiple Venture rounds of
                        Capital. Highly recommended for first time founders who
                        are looking for on-the-call solutions for specialized
                        accounting, taxation and statutory compliances.
                    </p>
                    <img
                        src="{{asset('frontend/assets/images/logo1.jpg')}}"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="{{asset('frontend/assets/images/ceo1.png')}}"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Sarbvir Singh</h3>
                    <h4>
                        CEO-PolicyBazaar, Ex Managing Partner-WaterBridge
                        Ventures
                    </h4>
                    <p>
                        I have been working with Startupfino on a couple of our
                        portfolio companies. I have found this team highly
                        responsive and they truly understand issues faced by
                        startups. I would highly recommend them to startups for
                        their accounting and compliance needs.
                    </p>
                    <img
                        src="{{asset('frontend/assets/images/logo8.jpg')}}"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="{{asset('frontend/assets/images/Sarbvir-Singh--Waterbridge.jpg')}}"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Kshitij Puri</h3>
                    <h4>CEO- Ziploan</h4>
                    <p>
                        I have been working with Karan and team with a long time
                        now. Karan’s thought of clarity is remarkable. He is
                        very easily able to distill the problem and provide a
                        solution which suits everyone needs. Would highly
                        recommend others to explore services provided by Karan
                        and his team at Startupfino.
                    </p>
                    <img
                        src="{{asset('frontend/assets/images/logo14.jpg')}}"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="{{asset('frontend/assets/images/Kshitij-Puri--Ziploan.jpg')}}"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Kush Beejal</h3>
                    <h4>NeoStencil</h4>
                    <p>
                        Team FINO has been there with us since we began our
                        journey 5 years back..the reason for our long lasting
                        relationship was the trust that the Fino team members
                        reciprocated. Compliance of both our USA and India
                        entity are handled by them. I’d highly recommend
                        StartUpfino to early stage startups”
                    </p>
                    <img
                        src="{{asset('frontend/assets/images/logo16.jpg')}}"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="{{asset('frontend/assets/images/Kush-Beejal--NeoStencil.jpg')}}"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Utkarsh Kawatra</h3>
                    <h4>CEO- myHQ</h4>
                    <p>
                        Startupfino team are one of the most friendly people to
                        work. They have a deep understanding of the business and
                        help us with all our financial work without any hassles.
                        Add to that a fast turnaround time for any task- they
                        are one of the best start up accounting firms in the
                        market!
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo4.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Utkarsh-Kawatra--Justwork.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Dipesh Garg</h3>
                    <h4>CEO- Truelancer</h4>
                    <p>
                        I have been working with Startupfino for last 5 years
                        and I really like the way they works. Startupfino helps
                        Truelancer from its very beginning for all of its
                        financial and legal aspects and turnaround the things
                        quickly. This firm is a truly a Startup Founder
                        friendly.
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo5.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Dipesh-Garg--Truelancer.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Gaurav Pushkar</h3>
                    <h4>CEO- Damensch</h4>
                    <p>
                        We have been working with Karan and Startupfino for a
                        long time now. The entire DNA of the firm is tuned
                        perfectly for startups. The support which you get from
                        them at the time of crisis really differentiates them
                        from everyone else in the market. Karan is a master of
                        his domain.Highly recommended from our side
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/dam-small-logo.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Gaurav-Pushkar--Damensch.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Mohit Sharma</h3>
                    <h4>CEO- Oye Rickshaw</h4>
                    <p>
                        The very foundation of a Startupfino is laid down by the
                        founding member of it. Mr. Karan is a great person and
                        getting to know that he is floating his own startup got
                        me really excited. I really love the services offered by
                        StartupFino and now getting these services through a
                        more efficient and controlled platform is going to be
                        truly amazing.
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo2.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Mohit Sharma- Oyerikshaw.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Shivam Singla</h3>
                    <h4>CEO- Leegality</h4>
                    <p>
                        Startupfino team has an unparalleled experience in
                        helping fast growing startups right from their inception
                        to later stage rounds. Startupfino helped Leegality for
                        all the financial and legal matters. Highly recommended
                        and all the best!
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo11.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Shivam-Singla--Leegality.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Tanuj Gangwani</h3>
                    <h4>Head Finance- Wheelseye</h4>
                    <p>
                        We worked with Deepak from StartupFino and the
                        experience has been fantastic. They have good knowledge
                        about Tax compliance and Labour law compliance.This firm
                        is highly recommended for Startup world
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo10.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Tanuj-Gangwani--Wheelseye.jpg"
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <h3>Himanshu Kapsime</h3>
                    <h4>CEO ShaadiSaga</h4>
                    <p>
                        We have been working Karan and Startupfino team for
                        almost 5 years now. In any startup legal and financial
                        work takes huge time and the way Karan takes the
                        ownership of the work, as a founder you are able to save
                        lot of time and be tension free. Highly recommended.
                    </p>
                    <img
                        src="https://www.startupfino.com/assets/images/logo15.jpg"
                    />
                </div>
                <div class="right-side">
                    <img
                        src="https://www.startupfino.com/assets/images/Himanshu-Kapsime--Shaadisaga.jpg"
                    />
                </div>
            </div>
        </div>
        <!-- <div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Nikita Rajwade</h3>
					<h4>Senior Associate- Rajaram Legal</h4>
					<p>I've worked with Karan and Startupfino over multiple venture capital transactions and fundraises and also on corporate secretarial documentation. Karan is always prompt and helpful in answering all queries, is very efficient, and always ensures that he sees a transaction to the end successfully. Wishing Karan and his team all the best!</p>
					<img src="https://www.startupfino.com/assets/images/logo19.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo19.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Shruti Pyare</h3>
					<h4>CEO- Sair</h4>
					<p>We have been working with the Startupfino team before we even incorporated our company. Karan and company have been instrumental in setting up our  financial, people and compliance processes. We have been able to rely on Karan to think beyond usual tasks to give us a heads up on what is required for  compliance management and due diligences. The price to value is also very good and startups need such comprehensive and affordable services they can rely on.</p>
					<img src="https://www.startupfino.com/assets/images/logo16.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo16.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Dr Rajan Chopra</h3>
					<h4></h4>
					<p>We have been working with Startupfino since last many year. We have found them truly professional and diligent. Highly Recommended. </p>
					<img src="https://www.startupfino.com/assets/images/logo20.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo20.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Ankit Khandelwal</h3>
					<h4>CEO- Gromo</h4>
					<p>Startupfino is managing the accounts,legal and finance for Gromo since its inception. They can handle the entire finance and legal for any startup with the use of their inhouse team. Wish them the best of luck and recommending them to all early and mid stage startups. </p>
					<img src="https://www.startupfino.com/assets/images/logo21.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo21.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Ankit Prasad</h3>
					<h4>CEO- Bobble Keyboard</h4>
					<p>It was indeed a great experience to onboard Startupfino as our accounting and compliance management partner for Bobble Keyboard. We will highly recommend them to any fast-growing startup for their early stage financial or legal needs.</p>
					<img src="https://www.startupfino.com/assets/images/logo7.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo7.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Gurushyam Hariharan</h3>
					<h4>CEO- Boomerang Commerce</h4>
					<p>Boomerang Commerce used Startupfino accounting services and found it crucial. They did a great job at accounting, invoicing and other compliance handling needs for our US and India entities.  I would recommend them to startups for their accounting needs!"</p>
					<img src="https://www.startupfino.com/assets/images/logo3.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo3.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Apoorv Jain</h3>
					<h4>CEO- ExpressStores</h4>					
					<p>We have been working with Startupfino team. They have been instrumental in setting up our startup and sailing smoothly through all the financial and compliance hassles of a young startup in their early days. From setting up financial, employment processes to fund raising help, they're well adept to help a startup in early days to help focus on the core business leaving financial headaches to the team.</p>
					<img src="https://www.startupfino.com/assets/images/logo12.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo12.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Guru Naganat</h3>
					<h4>CFO Dubin Group</h4>
					<p>Startupfino and his team of accountants are excellent breed of financial professionals that will meet the accounting and financial needs of any organization. Team specializes In startups and organizations that need initial setup as well as catch-up where new companies often find themselves in. I have had the opportunity to work with tean with a few successful startups based in USA and India and found them to be very knowledgeable, friendly , flexible and very accurate. Team has expertise in many accounting software systems and is a stalwart it MS Excel which startups and smaller companies need to present their information. I strongly recommend them for an organization's financial planning and analysis needs. </p>
					<img src="https://www.startupfino.com/assets/images/logo6.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo6.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Ranjit Rauniyar</h3>
					<h4>Founder-Ez Karma</h4>
					<p>With Startupfino you get not just a great CA, but also a great advisor. Team Startupfino has deep acumen for both accounting matters and business best practices. Team Startupfino have been a great support to us as a Startup.</p>
					<img src="https://www.startupfino.com/assets/images/logo9.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo9.png">
				</div>
			</div>
		</div>
		<div>
			<div class="slider-item">
				<div class="left-side">
					<h3>Anurag Saboo</h3>
					<h4>CEO- Damensch</h4>
					<p>We have been working with Karan and Startupfino for a long time now. The entire DNA of the firm is tuned perfectly for startups. The support which you get from them at the time of crisis really differentiates them from everyone else in the market. Karan is a master of his domain and one of the most problem solving person that I have met.Highly recommended from our side</p>
					<img src="https://www.startupfino.com/assets/images/logo18.jpg">
				</div>
				<div class="right-side">
					<img src="https://www.startupfino.com/assets/images/ceo18.png">
				</div>
			</div>
		</div> -->
    </div>
</div>
<div
    class="sw coma mobile_block"
    style="
        background-image: url('https://www.startupfino.com/assets/images/Rectangle.png');
    "
>
    <div class="container">
        <div class="row eco-system">
            <div class="col-md-12">
                <h2>Startup eco-system loves to talk about us!</h2>
            </div>
        </div>
    </div>
    <div class="center">
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Ishant Sharma</h3>
                        <h4>Indian Cricketer</h4>
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Ishant-Sharma-1.jpg"
                        />
                    </div>
                    <p>
                        Startupfino is managing my accounts and its such a
                        relaxed and smooth journey so far , I dont have to worry
                        about timely execution of the work . They manage my
                        invoicing, finances and compliances in a efficient way.
                        I wish karan and team all the very best for the future
                        of this startup .
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Abhishek Bansal</h3>
                        <h4>CEO, ShadowFax</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo1.jpg"
                            class="cl_cmpny_img"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/ceo1.png"
                            class="cl_img"
                        />
                    </div>
                    <p>
                        Startupfino provided Shadowfax with an end to end
                        support in managing compliance and accounts during our
                        early stage and helped us transition to a full fledged
                        finance team post our multiple Venture rounds of
                        Capital. Highly recommended for first time founders who
                        are looking for on-the-call solutions for specialized
                        accounting, taxation and statutory compliances.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Sarbvir Singh</h3>
                        <h4>
                            CEO-PolicyBazaar, Ex Managing Partner-WaterBridge
                            Ventures
                        </h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo8.jpg"
                            class="cl_cmpny_img"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Sarbvir-Singh--Waterbridge.jpg"
                            class="cl_img"
                        />
                    </div>
                    <p>
                        I have been working with Startupfino on a couple of our
                        portfolio companies. I have found this team highly
                        responsive and they truly understand issues faced by
                        startups. I would highly recommend them to startups for
                        their accounting and compliance needs.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Kshitij Puri</h3>
                        <h4>CEO- Ziploan</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo14.jpg"
                            class="cl_cmpny_img"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Kshitij-Puri--Ziploan.jpg"
                            class="cl_img"
                        />
                    </div>
                    <p>
                        I have been working with Karan and team with a long time
                        now. Karan’s thought of clarity is remarkable. He is
                        very easily able to distill the problem and provide a
                        solution which suits everyone needs. Would highly
                        recommend others to explore services provided by Karan
                        and his team at Startupfino.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Kush Beejal</h3>
                        <h4>NeoStencil</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo16.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Kush-Beejal--NeoStencil.jpg"
                        />
                    </div>
                    <p>
                        Team FINO has been there with us since we began our
                        journey 5 years back..the reason for our long lasting
                        relationship was the trust that the Fino team members
                        reciprocated. Compliance of both our USA and India
                        entity are handled by them. I’d highly recommend
                        StartUpfino to early stage startups”
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Utkarsh Kawatra</h3>
                        <h4>CEO- myHQ</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo4.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Utkarsh-Kawatra--Justwork.jpg"
                        />
                    </div>
                    <p>
                        Startupfino team are one of the most friendly people to
                        work. They have a deep understanding of the business and
                        help us with all our financial work without any hassles.
                        Add to that a fast turnaround time for any task- they
                        are one of the best start up accounting firms in the
                        market!
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Dipesh Garg</h3>
                        <h4>CEO- Truelancer</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo5.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Dipesh-Garg--Truelancer.jpg"
                        />
                    </div>
                    <p>
                        I have been working with Startupfino for last 5 years
                        and I really like the way they works. Startupfino helps
                        Truelancer from its very beginning for all of its
                        financial and legal aspects and turnaround the things
                        quickly. This firm is a truly a Startup Founder
                        friendly.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Gaurav Pushkar</h3>
                        <h4>CEO- Damensch</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/dam-small-logo.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Gaurav-Pushkar--Damensch.jpg"
                        />
                    </div>
                    <p>
                        We have been working with Karan and Startupfino for a
                        long time now. The entire DNA of the firm is tuned
                        perfectly for startups. The support which you get from
                        them at the time of crisis really differentiates them
                        from everyone else in the market. Karan is a master of
                        his domain.Highly recommended from our side
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Mohit Sharma</h3>
                        <h4>CEO- Oye Rickshaw</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo2.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Mohit Sharma- Oyerikshaw.jpg"
                        />
                    </div>
                    <p>
                        The very foundation of a Startupfino is laid down by the
                        founding member of it. Mr. Karan is a great person and
                        getting to know that he is floating his own startup got
                        me really excited. I really love the services offered by
                        StartupFino and now getting these services through a
                        more efficient and controlled platform is going to be
                        truly amazing.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Shivam Singla</h3>
                        <h4>CEO- Leegality</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo11.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Shivam-Singla--Leegality.jpg"
                        />
                    </div>
                    <p>
                        Startupfino team has an unparalleled experience in
                        helping fast growing startups right from their inception
                        to later stage rounds. Startupfino helped Leegality for
                        all the financial and legal matters. Highly recommended
                        and all the best!
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Tanuj Gangwani</h3>
                        <h4>Head Finance- Wheelseye</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo10.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Tanuj-Gangwani--Wheelseye.jpg"
                        />
                    </div>
                    <p>
                        We worked with Deepak from StartupFino and the
                        experience has been fantastic. They have good knowledge
                        about Tax compliance and Labour law compliance.This firm
                        is highly recommended for Startup world
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item">
                <div class="left-side">
                    <div class="col-left">
                        <h3>Himanshu Kapsime</h3>
                        <h4>CEO ShaadiSaga</h4>
                        <img
                            src="https://www.startupfino.com/assets/images/logo15.jpg"
                        />
                    </div>
                    <div class="col-right">
                        <img
                            src="https://www.startupfino.com/assets/images/Himanshu-Kapsime--Shaadisaga.jpg"
                        />
                    </div>
                    <p>
                        We have been working Karan and Startupfino team for
                        almost 5 years now. In any startup legal and financial
                        work takes huge time and the way Karan takes the
                        ownership of the work, as a founder you are able to save
                        lot of time and be tension free. Highly recommended.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sw trust-sec">
    <div class="container">
        <div class="row startups">
            <div class="col-md-12">
                <h2>500+ Startups Trust us!</h2>
            </div>
            <div class="client-slider desk_none">
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client1.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client2.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client3.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client4.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client11.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client6.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client7.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client8.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client9.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client10.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client12.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/srijan-logo.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client37.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client14.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client34.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client16.jpg"
                                />
                            </div>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client17.jpg"
                                />
                            </div>
                        </li>

                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client18.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="client-slider mobile_block">
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client1.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client2.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client3.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client4.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client11.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client6.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client7.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client8.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client9.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client10.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client12.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/srijan-logo.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client37.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client14.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client34.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client16.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="c-s">
                    <ul>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client17.jpg"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img
                                    src="https://www.startupfino.com/assets/images/client18.jpg"
                                />
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="group-path">
    <div class="group-path-bg">
        <div class="sw bg2">
            <div class="container">
                <div class="row popular">
                    <div class="col-md-12">
                        <h2>Most Popular Offerings!</h2>
                    </div>
                    <div class="demo">
                        <div role="tabpanel">
                            <ul
                                class="nav nav-tabs nav-tabs-dropdown"
                                role="tablist"
                            >
                                <li role="presentation" class="">
                                    <a
                                        class="active"
                                        href="#StartBusiness"
                                        aria-controls="start-business"
                                        role="tab"
                                        data-toggle="tab"
                                        >Start Business</a
                                    >
                                </li>
                                <li role="presentation" class="">
                                    <a
                                        class=""
                                        href="#ManageBusiness"
                                        aria-controls="start-business"
                                        role="tab"
                                        data-toggle="tab"
                                        >Manage Business</a
                                    >
                                </li>
                                <li role="presentation" class="">
                                    <a
                                        class=""
                                        href="#ProtectBusiness"
                                        aria-controls="start-business"
                                        role="tab"
                                        data-toggle="tab"
                                        >Protect Business</a
                                    >
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div
                                    role="tabpanel"
                                    class="tab-pane active"
                                    id="StartBusiness"
                                >
                                    <div class="row">
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>
                                                    Private Limited
                                                    Incorporation
                                                </h3>
                                                <p>
                                                    Most popular type of
                                                    Corporate entity and
                                                    recommended for the
                                                    Start-ups.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 8499</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 10999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/company-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>
                                                    Limited Liability
                                                    Partnership (LLP)
                                                </h3>
                                                <p>
                                                    Registered under MCA and
                                                    ensuring Limited liabilities
                                                    for its Partners.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 6099</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 9499</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/limited-liability-partnership-llp-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>One Person Company</h3>
                                                <p>
                                                    Registered under MCA and is
                                                    recommended to the Start-ups
                                                    having Single Founder.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 5599</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 8999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/one-person-company-opc-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Partnership Firm</h3>
                                                <p>
                                                    Governed by Partnership Act
                                                    and is recommended for Idea
                                                    stage business.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 3099</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/partnership-firm-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Proprietorship Firm</h3>
                                                <p>
                                                    Simplest form of doing the
                                                    business and has no
                                                    individual business
                                                    existence.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2499</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 3999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/sole-properitorship-firm-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Shop & Establishment</h3>
                                                <p>
                                                    State based Registration
                                                    required for any commercial
                                                    place.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 6499</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 8499</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/shop-establishment-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Foreign Subsidiary</h3>
                                                <p>
                                                    Company whose shares are
                                                    majorly owned by foreign
                                                    Parent Company.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 29899</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 34999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/foreign-subsidiary-company-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Section 8 Company (NGO)</h3>
                                                <p>
                                                    Preferred form of
                                                    registering a NGO and
                                                    governed under the
                                                    guidelines of MCA.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 24999</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 30999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/section-8-company-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>US Incorporation</h3>
                                                <p>
                                                    C Corp or S Corp registered
                                                    under the norms of United
                                                    States.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 49999</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 59999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/us-company-incorporation"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    role="tabpanel"
                                    class="tab-pane"
                                    id="ManageBusiness"
                                >
                                    <div class="row">
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>GST</h3>
                                                <p>
                                                    Unified indirect tax that
                                                    combines several taxes
                                                    including VAT, Service Tax
                                                    etc
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 1599</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/gst-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Udyog Aadhar (MSME)</h3>
                                                <p>
                                                    Registration allows the
                                                    MSMEs to register themselves
                                                    and avail the benefits.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 1999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/udyog-aadhar-msme-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>FSSAI (Food Licence)</h3>
                                                <p>
                                                    Applicable on the businesses
                                                    undertaking activities
                                                    related to Food.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 6199</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 7999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/fssai-food-license"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Startup India</h3>
                                                <p>
                                                    Register with DIPP and avail
                                                    the benefits made available
                                                    to Startups.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 8999</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 12999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/startup-india-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>EPF Registration</h3>
                                                <p>
                                                    Registration is mandatory
                                                    for the business employing
                                                    more than 20 employees.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 4999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 6999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/epf-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>ESI Registration</h3>
                                                <p>
                                                    Provides medical facility to
                                                    employees and is mandatory
                                                    for the business.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 4999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 6999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/esi-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>
                                                    Import Export Code (IEC)
                                                </h3>
                                                <p>
                                                    Mandatorily required for
                                                    businesses willing to do
                                                    import or export.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/import-export-code-iec-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Professional Tax</h3>
                                                <p>
                                                    Tax levied by states on
                                                    employees and Professionals.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 5999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 7499</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/professional-tax-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>PAN/TAN Application</h3>
                                                <p>
                                                    Permanent Account Number and
                                                    Tax Deduction Account
                                                    number.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 899</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 1399</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/how-to-apply-for-a-pan-card"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    role="tabpanel"
                                    class="tab-pane"
                                    id="ProtectBusiness"
                                >
                                    <div class="row">
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Trademark Registration</h3>
                                                <p>
                                                    Filing of application for
                                                    registering the word mark or
                                                    logo.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 5999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 6999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/trademark-registration"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Trademark Objection</h3>
                                                <p>
                                                    Process of filing the reply
                                                    against the Objection
                                                    raised.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 3499</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/trademark-objection"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Trademark Assignment</h3>
                                                <p>
                                                    Process of assigning the
                                                    rights of Trademark to the
                                                    other Person.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 9999</span
                                                    ><span class="rs rg-price"
                                                        ><del
                                                            >₹ 12999</del
                                                        ></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/trademark-assignment"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Employment Agreement</h3>
                                                <p>
                                                    Agreement between the
                                                    business and employee
                                                    defines the terms of
                                                    employment. <br />
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/employment-agreement"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>
                                                    Customer/Vendor Agreement
                                                </h3>
                                                <p>
                                                    Master Service Agreement
                                                    with your Customers and
                                                    Agreement with your Vendors.
                                                    <br />
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/customer-vendor-agreement"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Terms of Use</h3>
                                                <p>
                                                    T&C with the business and
                                                    its users which is to be
                                                    placed in the website of
                                                    business.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/terms-of-use"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Privacy Policy</h3>
                                                <p>
                                                    statement that discloses
                                                    ways a business gathers,
                                                    uses, discloses, and manages
                                                    a customer data.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 2999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 4999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/privacy-policy"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>ESOP Policy</h3>
                                                <p>
                                                    Policy defines the rules and
                                                    regulations w.r.t.
                                                    implementation of ESOPs in
                                                    the startup.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 4999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 9999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/esop-policy"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-4 col-sm-6 col-6 mt-4"
                                        >
                                            <div class="bdr2">
                                                <h3>Founders Agreement</h3>
                                                <p>
                                                    Agreement between the
                                                    Founders of the Startup to
                                                    define the detailed terms
                                                    between themselves.
                                                </p>
                                                <span
                                                    ><span class="rs"
                                                        >₹ 3999</span
                                                    ><span class="rs rg-price"
                                                        ><del>₹ 5999</del></span
                                                    >
                                                </span>

                                                <a
                                                    target="_blank"
                                                    class="float-right"
                                                    href="https://www.startupfino.com/services/founders-agreement"
                                                    >Book Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw bg3 desk_none">
            <div class="container">
                <div class="row why-startups">
                    <div class="col-md-12">
                        <h2>
                            Why Startups
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            StartupFino
                        </h2>
                    </div>
                    <div class="col-md-4 mt-4"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="why-item">
                                <ul>
                                    <li>
                                        <div
                                            class="why-left"
                                            style="
                                                background-image: url('https://www.startupfino.com/assets/images/user.png');
                                            "
                                        >
                                            <h3>F</h3>
                                        </div>
                                        <div class="why-right">
                                            <h4>Founder Friendly Firm</h4>
                                            <p>
                                                The single most objective of our
                                                team is to help Founders and the
                                                team is well adept to help a
                                                startup and let founder focus on
                                                the core business leaving
                                                financial headaches to the team.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="why-left"
                                            style="
                                                background-image: url('https://www.startupfino.com/assets/images/hand.png');
                                            "
                                        >
                                            <h3>I</h3>
                                        </div>
                                        <div class="why-right">
                                            <h4>
                                                Integrity, Trust and
                                                Confidentiality
                                            </h4>
                                            <p>
                                                Startfino works with complete
                                                Integrity, Trust and maintains
                                                the complete level
                                                confidentiality.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="why-left"
                                            style="
                                                background-image: url('https://www.startupfino.com/assets/images/network.png');
                                            "
                                        >
                                            <h3>N</h3>
                                        </div>
                                        <div class="why-right">
                                            <h4>
                                                Network of Investors and Startup
                                                Enthusiasts
                                            </h4>
                                            <p>
                                                Startupfino worked in the
                                                Startup ecosystem since a decade
                                                and has a large network of
                                                investors and Startup service
                                                providers which can be leveraged
                                                by the Founders during their
                                                Startup Journey.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="why-left"
                                            style="
                                                background-image: url('https://www.startupfino.com/assets/images/stop.png');
                                            "
                                        >
                                            <h3>O</h3>
                                        </div>
                                        <div class="why-right">
                                            <h4>
                                                One Stop Solutions for Startups
                                            </h4>
                                            <p>
                                                We are one stop solution for
                                                startups for their entire
                                                Finance and Legal needs with the
                                                help of our in house team.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sw new_tab mobile_block">
    <div class="container">
        <div class="row why-startups">
            <div class="col-md-12 mb-4">
                <h2>
                    Why Startups
                    <i class="fa fa-heart" aria-hidden="true"></i> StartupFino
                </h2>
            </div>
            <div class="col-md-12">
                <div id="exTab3" class="">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a
                                class="nav-item nav-link active"
                                id="nav-home-tab"
                                data-toggle="tab"
                                href="#nav-home"
                                role="tab"
                                aria-controls="nav-home"
                                aria-selected="true"
                                style="
                                    background-image: url('https://www.startupfino.com/assets/images/user.png');
                                "
                                >F</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-profile-tab"
                                data-toggle="tab"
                                href="#nav-profile"
                                role="tab"
                                aria-controls="nav-profile"
                                aria-selected="false"
                                style="
                                    background-image: url('https://www.startupfino.com/assets/images/hand.png');
                                "
                                >I</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-contact-tab"
                                data-toggle="tab"
                                href="#nav-contact"
                                role="tab"
                                aria-controls="nav-contact"
                                aria-selected="false"
                                style="
                                    background-image: url('https://www.startupfino.com/assets/images/network.png');
                                "
                                >N</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-four-tab"
                                data-toggle="tab"
                                href="#nav-four"
                                role="tab"
                                aria-controls="nav-four"
                                aria-selected="false"
                                style="
                                    background-image: url('https://www.startupfino.com/assets/images/stop.png');
                                "
                                >O</a
                            >
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="nav-home"
                            role="tabpanel"
                            aria-labelledby="nav-home-tab"
                        >
                            <h4>Founder Friendly Firm</h4>
                            <p>
                                The single most objective of our team is to help
                                Founders and the team is well adept to help a
                                startup and let founder focus on the core
                                business leaving financial headaches to the
                                team.
                            </p>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-profile"
                            role="tabpanel"
                            aria-labelledby="nav-profile-tab"
                        >
                            <h4>Integrity, Trust and Confidentiality</h4>
                            <p>
                                Startfino works with complete Integrity, Trust
                                and maintains the complete level
                                confidentiality.
                            </p>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-contact"
                            role="tabpanel"
                            aria-labelledby="nav-contact-tab"
                        >
                            <h4>
                                Network of Investors and Startup Enthusiasts
                            </h4>
                            <p>
                                Startupfino worked in the Startup ecosystem
                                since a decade and has a large network of
                                investors and Startup service providers which
                                can be leveraged by the Founders during their
                                Startup Journey.
                            </p>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-four"
                            role="tabpanel"
                            aria-labelledby="nav-four-tab"
                        >
                            <h4>One Stop Solutions for Startups</h4>
                            <p>
                                We are one stop solution for startups for their
                                entire Finance and Legal needs with the help of
                                our in house team.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div id="exTab3" class="">
					<ul class="nav nav-pills" id="mobile_block_pills">
						<li class="active" style="background-image: url('https://www.startupfino.com/assets/images/user.png');"><a href="#1b" data-toggle="tab">F</a></li>
						<li style="background-image: url('https://www.startupfino.com/assets/images/hand.png');"><a href="#2b" data-toggle="tab">I</a></li>
						<li style="background-image: url('https://www.startupfino.com/assets/images/network.png');"><a href="#3b" data-toggle="tab">N</a></li>
						<li style="background-image: url('https://www.startupfino.com/assets/images/stop.png');"><a href="#4a" data-toggle="tab">O</a></li>
					</ul>
					<div class="tab-content clearfix">
						<div class="tab-pane active" id="1b">
							<h4>Founder Friendly Firm</h4>
							<p>The single most objective of our team is to help Founders and the team is well adept to help a startup and let founder focus on the core business leaving financial headaches to the team.</p>
						</div>
						<div class="tab-pane" id="2b">
							<h4>Integrity, Trust and Confidentiality</h4>
							<p>Startfino works with complete Integrity, Trust and maintains the complete level confidentiality.</p>
						</div>
						<div class="tab-pane" id="3b">
							<h4>Network of Investors and Startup Enthusiasts</h4>
							<p>Startupfino worked in the Startup ecosystem since a decade and has a large network of investors and Startup service providers which can be leveraged by the Founders during their Startup Journey.</p>
						</div>
						<div class="tab-pane" id="4b">
							<h4>One Stop Solutions for Startups</h4>
							<p>We are one stop solution for startups for their entire Finance and Legal needs with the help of our in house team.</p>
						</div>
					</div>
				</div> -->
            </div>
        </div>
    </div>
</div>
<div class="sw bg4">
    <div class="container">
        <div class="prg-container row">
            <div class="col-md-12">
                <h2>10+ years of success</h2>
                <p>
                    Startupfino is working with Startups since last 10 years
                    with an unparalleled experience of helping fast growing
                    startups. Our Success can be witnessed through the numbers
                    given below.
                </p>
            </div>
            <div class="col-md-12 mobile_block">
                <img
                    src="https://www.startupfino.com/assets/images/counter_img_mob.jpg"
                />
            </div>
            <div class="col-md-12 desk_none">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp">
                                <h3 class="prg-count" data-count="500">0</h3>
                                <h4 class="prg-count-title">Startups</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp2">
                                <h3 class="prg-count" data-count="8000">0</h3>
                                <h4 class="prg-count-title">
                                    Projects Completed
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item location_item">
                            <div class="counter-inner mt-tp3">
                                <h3 class="prg-count" data-count="4">0</h3>
                                <h4 class="prg-count-title">Office Location</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item cl_item">
                            <div class="counter-inner mt-tp4">
                                <h3 class="prg-count" data-count="98">0</h3>
                                <h4 class="prg-count-title">
                                    Client Retention
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
