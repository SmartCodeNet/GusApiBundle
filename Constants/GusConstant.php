<?php

namespace SmartCodeNet\GusApiBundle\Constants;

final class GusConstant
{
    public const BASE_WSDL_URL_TEST = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl-ver11-test.wsdl';
    public const BASE_WSDL_ADDRESS_TEST =  'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';

    public const BASE_WSDL_URL = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl.xsd';
    public const BASE_WSDL_ADDRESS =  'https://wyszukiwarkaregon.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';

    public const PARAM_USER_KEY = 'pKluczUzytkownika';
    public const PARAM_SESSION_ID = 'pIdentyfikatorSesji';
    public const PARAM_CAPTCHA = 'pCaptcha';
    public const PARAM_SEARCH = 'pParametryWyszukiwania';
    public const PARAM_REGON = 'pRegon';
    public const PARAM_REPORT_NAME = 'pNazwaRaportu';
    public const PARAM_PARAM_NAME = 'pNazwaParametru';

    public const PARAM_STATUS_DATE_STATE = 'StanDanych';
    public const PARAM_MESSAGE_CODE = 'KomunikatKod';
    public const PARAM_MESSAGE = 'KomunikatTresc';
    public const PARAM_SESSION_STATUS = 'StatusSesji';
    public const PARAM_SERVICE_STATUS = 'StatusUslugi';
    public const PARAM_SERVICE_MESSAGE = 'KomunikatUslugi';

    public const SERVICE_UNAVAILABLE_RESPONSE = 0;
    public const SERVICE_AVAILABLE_RESPONSE = 1;
    public const SERVICE_TECHNICAL_BREAK_RESPONSE = 2;

    public const SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';
    public const SERVICE_AVAILABLE = 'SERVICE_AVAILABLE';
    public const SERVICE_TECHNICAL_BREAK = 'SERVICE_TECHNICAL_BREAK';

    public const SEARCH_TYPE_NIP  = 'Nip';
    public const SEARCH_TYPE_KRS  = 'Krs';
    public const SEARCH_TYPE_REGON = 'Regon';

    // BIR 1.1
    public const LEGAL_PERSON_GENERAL_DATA = 'BIR11OsFizycznaDaneOgolne';
    public const LEGAL_PERSON_CEIDG_ACTIVITY_DATA = 'BIR11OsFizycznaDzialalnoscCeidg';
    public const LEGAL_PERSON_AGRICULTURAL_ACTIVITY_DATA = 'BIR11OsFizycznaDzialalnoscRolnicza';
    public const LEGAL_PERSON_OTHER_ACTIVITY_DATA = 'BIR11OsFizycznaDzialalnoscPozostala';
    public const LEGAL_PERSON_REMOVED_ACTIVITY_DATA = 'BIR11OsFizycznaDzialalnoscSkreslonaDo20141108';
    public const LEGAL_PERSON_PKD_DATA = 'BIR11OsFizycznaPkd';
    public const LEGAL_PERSON_COMPANY_BRANCHES_LIST_DATA = 'BIR11OsFizycznaListaJednLokalnych';
    public const LEGAL_PERSON_COMPANY_BRANCH_DATA = 'BIR11JednLokalnaOsFizycznej';
    public const LEGAL_PERSON_COMPANY_BRANCH_PKD_DATA = 'BIR11JednLokalnaOsFizycznejPkd';
    public const LAW_PERSON_GENERAL_DATA = 'BIR11OsPrawna';
    public const LAW_PERSON_PKD_DATA = 'BIR11OsPrawnaPkd';
    public const LAW_PERSON_COMPANY_BRANCHES_LIST_DATA = 'BIR11OsPrawnaListaJednLokalnych';
    public const LAW_PERSON_COMPANY_BRANCH_DATA = 'BIR11JednLokalnaOsPrawnej';
    public const LAW_PERSON_COMPANY_BRANCH_PKD_DATA = 'BIR11JednLokalnaOsPrawnejPkd';
    public const CIVIL_LAW_PARTNERSHIP_PARTNERS_DATA = 'BIR11OsPrawnaSpCywilnaWspolnicy';
    public const BUSINESS_ENTITY_TYPE = 'BIR11TypPodmiotu';

    public const LAW_PREFIX = 'praw_';
    public const LAW_BRANCH_PREFIX = 'lokpraw_';
    public const LEGAL_PREFIX = 'fiz_';
    public const LEGAL_BRANCH_PREFIX = 'lokfiz_';
    public const PARTNERSHIP_PREFIX = 'wspolsc_';

    public const LAW_PERSON_SYMBOL = 'P';
    public const LEGAL_PERSON_SYMBOL = 'F';
    public const LOCAL_UNIT_LEGAL_PERSON_SYMBOL = 'LF';
    public const LOCAL_UNIT_LAW_PERSON_SYMBOL = 'LP';
}
