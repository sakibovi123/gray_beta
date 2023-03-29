<?php include 'header.php'; ?> 

<!-- start main content -->
<?php
$pagename = isset($_GET['q']) ? $_GET['q'] : '' ;


switch ($pagename)
{
    case 'about-us':
        include 'snippets/project/gray/aboutus-banner.php';
        include 'snippets/project/gray/aboutus-intro.php';
        include 'snippets/project/gray/aboutus-mission.php';
        include 'snippets/project/gray/aboutus-values.php';
        include 'snippets/project/gray/aboutus-team.php';
        include 'snippets/project/gray/aboutus-our-bd-team.php';
        include 'snippets/project/gray/aboutus-we-are-global.php';
        include 'snippets/project/gray/aboutus-faq.php';
        include 'snippets/project/gray/aboutus-quickcall.php';

    break;
    case 'partners':

        include 'snippets/project/gray/partner-banner.php';
        include 'snippets/project/gray/partner-why-choose.php';
        include 'snippets/project/gray/partner-earn.php';
        include 'snippets/project/gray/partner-audience.php';
        include 'snippets/project/gray/partner-roi-table.php';
        include 'snippets/project/gray/home-solutions.php';
        include 'snippets/project/gray/partner-pricing-features.php';
        include 'snippets/project/gray/partner-howitworks.php';
        include 'snippets/project/gray/partner-register.php';
        include 'snippets/project/gray/partner-faq.php';
        include 'snippets/project/gray/partner-freetrial.php';



         break;


   
    case 'work-with-gray':
        include 'snippets/project/gray/career-banner.php';
        include 'snippets/project/gray/career-financial-benifit.php';
        include 'snippets/project/gray/career-pricing-features.php';
        include 'snippets/project/gray/career-howwework.php';
        include 'snippets/project/gray/career-list.php';
        include 'snippets/project/gray/aboutus-faq.php';
        include 'snippets/project/gray/career-joinus-link.php';

    break;

    case 'career-details':
        include 'snippets/modules/career/career-summary-info.php';
        include 'snippets/modules/career/career-requirements.php';

    break;

    case 'portfolios':
    include 'snippets/project/gray/case-study-banner.php';
    include 'snippets/project/gray/case-study-list.php';
    include 'snippets/project/gray/case-study-faq.php';
    include 'snippets/project/gray/case-study-quickcall.php';
    break;



  

    case 'our-solutions':
         include 'snippets/project/gray/solutions-banner.php';
         include 'snippets/project/gray/solutions-list.php';
         include 'snippets/project/gray/solutions-financial-benifit.php';
         include 'snippets/project/gray/solutions-common-features.php';
         include 'snippets/project/gray/solutions-technologies.php';
         include 'snippets/project/gray/elearning-howitworks.php';
         include 'snippets/project/gray/solutions-why-gglink.php';
         include 'snippets/project/gray/solutions-faq.php';
         include 'snippets/project/gray/solutions-free-trial.php';
       
    break;


case 'our-services':


         include 'snippets/project/gray/expertise-banner.php';
         include 'snippets/project/gray/expertise-list.php';
         include 'snippets/project/gray/expertise-financial-benefits.php';
         include 'snippets/project/gray/expertise-common-features.php';
         include 'snippets/project/gray/expertise-technologies.php';
         include 'snippets/project/gray/expertise-howwework.php';
         include 'snippets/project/gray/home-why-gglink.php';
         include 'snippets/project/gray/expertise-faq.php';
         include 'snippets/project/gray/expertise-quickcall.php';



    break;



        case 'expertise':
        include 'snippets/modules/cms/expertise-banner.php';
        include 'snippets/modules/cms/expertise-student.php';
        include 'snippets/modules/cms/expertise-teacher.php';
        include 'snippets/modules/cms/expertise-enterprise.php';
        include 'snippets/modules/cms/expertise-free-trial.php';

    break;

    


    case 'terms-of-use':
        include 'snippets/project/gray/termsofuse-content.php';

    break;

    case 'outsource':
        
        include 'snippets/project/gray/outsource-form.php';
        include 'snippets/project/gray/outsource-project-list.php';
        include 'snippets/project/gray/why-outsource-with-gglink.php';
        include 'snippets/project/gray/web-development.php';
        include 'snippets/project/gray/outsource-benefits.php';
        include 'snippets/project/gray/home-technologies.php';
        include 'snippets/project/gray/case-studies.php';
        include 'snippets/project/gray/outsource-our-approach.php';
        include 'snippets/project/gray/outsource-top-developer.php';
        include 'snippets/project/gray/blog-display.php';
        include 'snippets/project/gray/home-review-card.php';
      
      
        

    break;



    case 'ehealth':
        include 'snippets/project/gray/ehealth-banner.php';
        include 'snippets/project/gray/ehealth-technical-benefits.php';
        include 'snippets/project/gray/ehealth-pricing-features.php';
        include 'snippets/project/gray/ehealth-technologies.php';
        include 'snippets/project/gray/ehealth-financial-benefits.php';
        include 'snippets/project/gray/ehealth-roi-table.php';
        include 'snippets/project/gray/ehealth-enterprise.php';
        include 'snippets/project/gray/ehealth-clients.php';
        include 'snippets/project/gray/elearning-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/ehealth-quickcall.php';


        
    break;



    case 'enetworking':
        include 'snippets/project/gray/enetworking-banner.php';
        include 'snippets/project/gray/enetworking-technical-benefits.php';
        include 'snippets/project/gray/enetworking-pricing-features.php';
        include 'snippets/project/gray/enetworking-technologies.php';
        include 'snippets/project/gray/enetworking-financial-benefits.php';
        include 'snippets/project/gray/enetworking-roi-table.php';
        include 'snippets/project/gray/enetworking-enterprise.php';
        include 'snippets/project/gray/enetworking-clients.php';
        include 'snippets/project/gray/elearning-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/enetworking-quickcall.php';


        
    break;


    case 'ebooking':
        include 'snippets/project/gray/ebooking-banner.php';
        include 'snippets/project/gray/ebooking-technical-benefits.php';
        include 'snippets/project/gray/ebooking-pricing-features.php';
        include 'snippets/project/gray/ebooking-technologies.php';
        include 'snippets/project/gray/ebooking-financial-benefits.php';
        include 'snippets/project/gray/ebooking-roi-table.php';
        include 'snippets/project/gray/ebooking-enterprise.php';
        include 'snippets/project/gray/ebooking-clients.php';
         include 'snippets/project/gray/elearning-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/ebooking-quickcall.php';


        
    break;




    case 'crm':
        include 'snippets/project/gray/crm-banner.php';
        include 'snippets/project/gray/crm-technical-benefits.php';
        include 'snippets/project/gray/crm-pricing-features.php';
        include 'snippets/project/gray/crm-technologies.php';
        include 'snippets/project/gray/crm-financial-benefits.php';
        include 'snippets/project/gray/crm-roi-table.php';
        include 'snippets/project/gray/crm-enterprise.php';
        include 'snippets/project/gray/crm-clients.php';
        include 'snippets/project/gray/elearning-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/crm-quickcall.php';


        
    break;




    case 'ecommerce':
        include 'snippets/project/gray/ecommerce-banner.php';
        include 'snippets/project/gray/ecommerce-technical-benefits.php';
        include 'snippets/project/gray/ecommerce-pricing-features.php';
        include 'snippets/project/gray/ecommerce-technologies.php';
        include 'snippets/project/gray/ecommerce-financial-benefits.php';
        include 'snippets/project/gray/ecommerce-roi-table.php';
        include 'snippets/project/gray/ecommerce-enterprise.php';
        include 'snippets/project/gray/ecommerce-clients.php';
        include 'snippets/project/gray/ecommerce-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/ecommerce-quickcall.php';


        
    break;




    case 'elearning':

        include 'snippets/project/gray/elearning-banner.php';
        include 'snippets/project/gray/elearning-technical-benefits.php';
        include 'snippets/project/gray/elearning-pricing-features.php';
        include 'snippets/project/gray/elearning-technologies.php';
        include 'snippets/project/gray/elearning-financial-benefits.php';
        include 'snippets/project/gray/elearning-roi-table.php';
        include 'snippets/project/gray/elearning-enterprise.php';
        include 'snippets/project/gray/elearning-clients.php';
        include 'snippets/project/gray/elearning-howitworks.php';
        include 'snippets/project/gray/all-solutions-faq.php';
        include 'snippets/project/gray/elearning-quickcall.php';


        
    break;



    case 'project-consultancy':

        include 'snippets/project/gray/consultation-banner.php';
        include 'snippets/project/gray/consultation-technical-benefits.php';
        include 'snippets/project/gray/consultation-pricing-features.php';
        include 'snippets/project/gray/expertise-technologies.php';
        include 'snippets/project/gray/consultation-financial-benefits.php';
        include 'snippets/project/gray/consultation-roi-table.php';
        include 'snippets/project/gray/consultation-enterprise.php';
        include 'snippets/project/gray/consultation-howwework.php';
        include 'snippets/project/gray/consultation-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/consultation-quickcall.php';

      
    break;



    case 'project-management':


        include 'snippets/project/gray/management-banner.php';
        include 'snippets/project/gray/management-technical-benefits.php';
        include 'snippets/project/gray/management-pricing-features.php';
        include 'snippets/project/gray/management-technologies.php';
        include 'snippets/project/gray/management-financial-benefits.php';
        include 'snippets/project/gray/management-roi-table.php';
        include 'snippets/project/gray/management-enterprise.php';
        include 'snippets/project/gray/management-howwework.php';
        include 'snippets/project/gray/management-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/management-quickcall.php';


        
    break;



    case 'design':

        include 'snippets/project/gray/design-banner.php';
        include 'snippets/project/gray/design-technical-benefits.php';
        include 'snippets/project/gray/design-pricing-features.php';
        include 'snippets/project/gray/design-technologies.php';
        include 'snippets/project/gray/design-financial-benefits.php';
        include 'snippets/project/gray/design-roi-table.php';
        include 'snippets/project/gray/design-enterprise.php';
        include 'snippets/project/gray/design-howwework.php';
        include 'snippets/project/gray/design-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/design-quickcall.php';


        
    break;






    case 'development':


        include 'snippets/project/gray/development-banner.php';
        include 'snippets/project/gray/development-technical-benefits.php';
        include 'snippets/project/gray/development-pricing-features.php';
        include 'snippets/project/gray/development-technologies.php';
        include 'snippets/project/gray/development-financial-benefits.php';
        include 'snippets/project/gray/development-roi-table.php';
        include 'snippets/project/gray/development-enterprise.php';
        include 'snippets/project/gray/development-howwework.php';
        include 'snippets/project/gray/development-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/development-quickcall.php';



        
    break;




    case 'testing':
        include 'snippets/project/gray/testing-banner.php';
        include 'snippets/project/gray/testing-technical-benefits.php';
        include 'snippets/project/gray/testing-pricing-features.php';
        include 'snippets/project/gray/testing-technologies.php';
        include 'snippets/project/gray/testing-financial-benefits.php';
        include 'snippets/project/gray/testing-roi-table.php';
        include 'snippets/project/gray/testing-enterprise.php';
        include 'snippets/project/gray/testing-howwework.php';
        include 'snippets/project/gray/testing-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/testing-quickcall.php';

        
    break;




    case 'maintenance':
        include 'snippets/project/gray/maintenance-banner.php';
        include 'snippets/project/gray/maintenance-technical-benefits.php';
        include 'snippets/project/gray/maintenance-pricing-features.php';
        include 'snippets/project/gray/maintenance-technologies.php';
        include 'snippets/project/gray/maintenance-financial-benefits.php';
        include 'snippets/project/gray/maintenance-roi-table.php';
        include 'snippets/project/gray/maintenance-enterprise.php';
        include 'snippets/project/gray/maintenance-howwework.php';
        include 'snippets/project/gray/maintenance-clients.php';
        include 'snippets/project/gray/all-expertise-faq.php';
        include 'snippets/project/gray/maintenance-quickcall.php';


        
    break;



    case 'error':
        include 'snippets/common/errors/400.php';

    break;

      

        case 'contact-us':
        include 'snippets/project/gray/contactus-detail.php';
        include 'snippets/project/gray/aboutus-we-are-global.php';

    break;

    case 'contact-us-thank-you':
        include 'snippets/project/gray/contact-us-thank-you.php';
        

    break;

     case 'contact-us-dhaka':
        include 'snippets/project/gray/contactus-detail-bd.php';
        include 'snippets/project/gray/aboutus-we-are-global.php';

    break;

    case 'story-of-gray':
        include 'snippets/project/gray/story-banner.php';
        include 'snippets/project/gray/story-outline.php';
        include 'snippets/project/gray/story-faq.php';
        break;

    case '':
        include 'snippets/project/gray/home-banner.php';
        include 'snippets/project/gray/home-digitalisation-benefit.php';
        include 'snippets/project/gray/home-our-solutions.php';
        include 'snippets/project/gray/home-financial-benefit.php';
        include 'snippets/project/gray/home-financial-benefit-one.php';
        include 'snippets/project/gray/home-financial-benefit-two.php';
        include 'snippets/project/gray/home-why-gglink.php';
//        include 'snippets/project/gray/home-review-card.php';
        include 'snippets/project/gray/home-technologies.php';
        include 'snippets/project/gray/home-clients.php';
        include 'snippets/project/gray/home-freetrial.php';
        break;


        default:
        include 'snippets/common/errors/400.php';
        break;
    // sakib's code
    case 'gray-recent-blogs':
        include 'snippets/project/gray/blog.php';
    break;

    case "create-blog":
        include 'snippets/project/gray/create-blog.php';
    break;

    case 'blog-details':
        include 'snippets/project/gray/blog-details.php';
    break;

}
?>

 <?php include 'footer.php'; ?>
