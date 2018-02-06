<?php

namespace App\Http\Controllers;

use App\ProductCodeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductCodeController extends Controller
{

    protected $schm_codes = array();

    public function __construct()
    {
        $this->middleware('app');
        $this->schm_codes = [
            'CASH'=>'CASH',
            'EXPEN'=>'DEPT. EXPENSES',
            'OTEXP'=>'OTHER EXPENSES',
            'INCOM'=>'DEPT. INCOME',
            'OTINC'=>'OTHER INCOME',
            'ASSET'=>'DEPT. ASSETS',
            'OTASS'=>'OTHER ASSETS',
            'LIABT'=>'DEPT. LIABILITIES',
            'OTLBT'=>'OTHER LIABILITIES',
            'OTHER'=>'OTHER OFFICE ACCOUNTS',
            'ZEROB'=>'ZERO BALANCE ACCOUNTS',
            'OAPDR'=>'OAP DEBIT POINTING',
            'OAPCR'=>'OAP CREDIT POINTING',
            'OAPDE'=>'OAP DEBIT EXACT POINTING',
            'OAPCE'=>'OAP CREDIT EXACT POINTING',
            'HOACC'=>'HEAD OFFICE ACCOUNT',
            'HOACP'=>'PARKING HEAD OFFICE ACC',
            'PROXY'=>'PROXY ACCOUNTS',
            'DDREG'=>'DD REGULAR',
            'DDCEN'=>'CENTRALISED DD',
            'DDHDF'=>'HDFC DD',
            'PO'=>'PAY ORDERS',
            'SB101'=>'CLASSIC - SAVINGS BANK',
            'PC901'=>'PACKING CREDITS- RUPEE',
            'SB102'=>'DCB SHUBH-LABH SB',
            'SB103'=>'FAMILY - SAVINGS BANK',
            'SB104'=>'BENEFIT - SAVINGS BANK',
            'SB105'=>'GOLD MORTGAGES-SAVINGS BK',
            'SB106'=>'STAFF - SAVINGS BANK',
            'SB107'=>'NRO - SAVINGS BANK',
            'PC902'=>'PACKING CREDITS - PCFC',
            'SB108'=>'NRE - SAVINGS BANK',
            'SB109'=>'SB MAX',
            'CA205'=>'RFC(DOMESTIC) CURRENT A/C',
            'CA201'=>'CLASSIC CURRENT ACCOUNT',
            'CA202'=>'PREMIUM CURRENT ACCOUNT',
            'CA206'=>'CA-NOTIFIED FIN. INST.',
            'CA207'=>'VOSTRO - BANKS',
            'CA203'=>'NRO CURRENT ACCOUNT',
            'IB701'=>'INLD BILLS PURCH/DISC/NEG',
            'CA204'=>'NRE CURRENT ACCOUNT',
            'TD251'=>'RESIDENT FIXED DEPOSIT',
            'OD401'=>'O/D SMART CREDIT',
            'OD402'=>'O/D TDR RESIDENT',
            'CC451'=>'GENERAL CASH CREDIT',
            'OD411'=>'O/D SHARES',
            'OD416'=>'O/D OTH SECURED',
            'TD252'=>'RESIDENT RIC',
            'TD253'=>'RESIDENT QIC',
            'CC453'=>'TRADE-CASH CREDIT',
            'TD254'=>'RESIDENT MIC',
            'TD255'=>'RESIDENT RD',
            'TD256'=>'OTHER-CERTIFICATE OF DEP',
            'TD257'=>'RESIDENT AUTO RENEWAL DEP',
            'TD281'=>'STAFF FIXED DEPOSIT',
            'TD282'=>'STAFF RIC',
            'TD283'=>'STAFF QIC',
            'TD284'=>'STAFF MIC',
            'TD285'=>'STAFF RD',
            'TD286'=>'STAFF AUTO RENEWAL DEP',
            'TD301'=>'NRO FIXED DEPOSIT',
            'LN526'=>'HOUSING LOANS',
            'TD303'=>'NRO QIC',
            'LN527'=>'HOME LOANS',
            'TD302'=>'NRO RIC',
            'TD304'=>'NRO MIC',
            'TD321'=>'NRNR FIXED DEPOSIT',
            'TD322'=>'NRNR RIC',
            'TD323'=>'NRNR QIC',
            'TD324'=>'NRNR MIC',
            'LN551'=>'OTH.SECURED LOANS-EQUAL I',
            'TD341'=>'NRE FIXED DEPOSIT',
            'TD342'=>'NRE RIC',
            'TD343'=>'NRE QIC',
            'TD344'=>'NRE MIC',
            'TD345'=>'NRE PRAGATI',
            'TD305'=>'NRO RD',
            'LN531'=>'CAR LOANS',
            'LN503'=>'TDR LOANS',
            'LN501'=>'UNSECURED LOANS',
            'LN502'=>'SMW- LOANS',
            'OD406'=>'O/D TDR NRE',
            'TD361'=>'FCNR FD(MORE THAN 1 YEAR)',
            'OD407'=>'O/D TDR NRO',
            'IB711'=>'O/D AGNST BILLS PURC/DISC',
            'LN571'=>'CROP LOAN - AIB',
            'TD362'=>'FCNR FD(1 YEAR)',
            'FB801'=>'FRG. BILLS PUR/DIS/NEG/RA',
            'TD363'=>'FCNR RIC',
            'TD258'=>'NOTIFIED FIN. INST.- FD',
            'TD259'=>'INTER BANK FIXED DEPOSIT',
            'TD260'=>'INTER BANK DEPOSIT RIC',
            'FB802'=>'EXP BLS DISCOUNTED-EBRD',
            'LN552'=>'WCT LOANS',
            'LN504'=>'TDR-NRE LOANS',
            'LN505'=>'TDR-NRO LOANS',
            'LN554'=>'EDUCATIONAL LOANS',
            'LN555'=>'GOLD LOANS',
            'LN528'=>'PERSONAL LOANS',
            'LN556'=>'LN AGNST NSC/KVP/IVP/LIP',
            'LN557'=>'SHARES/DEB. LOANS',
            'LN621'=>'STF.BETTER LIVING LOANS',
            'LN622'=>'STF. VEHICLE LOANS',
            'LN623'=>'STF. PERSONAL LOANS',
            'LN631'=>'STF. HSG. LOAN-EQUATED',
            'LN632'=>'STF.HSG. LOANS-EQUAL',
            'LN633'=>'STF.LOANS-HOUSE RENOVAT.',
            'CC491'=>'DEM LN COMP - C/C',
            'TD261'=>'BANK-CERTIFICATE OF DEP',
            'TD262'=>'NFI-CERTIFICATE OF DEP',
            'CA208'=>'EEFC - CURRENT ACCOUNT',
            'LN558'=>'CORPORATE MIBOR LNKD LNS',
            'TD263'=>'RES. SHORT TD - IO',
            'TD287'=>'STAFF-SHORT TD - IO',
            'TD306'=>'NRO SHORT TD - IO',
            'TD264'=>'RES. SHORT TD - II',
            'TD265'=>'RES-SHORT-IO TD 15L N ABV',
            'TD266'=>'RES-SHORT-II TD15L ND ABV',
            'TD307'=>'NRO SHORT TD - II',
            'TD308'=>'NRO-SHORT-IO TD15L ND ABV',
            'TD309'=>'NRO-SHORT-II TD15L ND ABV',
            'TD288'=>'STAFF-SHORT TD - II',
            'PROV'=>'PROVISIONS/CONTINGENCIES',
            'DDPAY'=>'DD PAYABLE',
            'TD267'=>'RES-II 180 DYS ND ABV TD',
            'TD310'=>'NRO-II 180 DYS ND ABV TD',
            'TD289'=>'STAF-II 180 DYS ND ABV TD',
            'TD346'=>'NRE 180 DYS ND ABV TD',
            'LN553'=>'OTH.SECURED LOAN-EQTD INS',
            'LN691'=>'INLAND BANK GTEES INVOKED',
            'LN692'=>'INLAND L/CS DEVOLVED',
            'LN506'=>'FCNR TD-RUPEE LOANS',
            'FB803'=>'IMP L/C BLS DEVOLVED',
            'CC492'=>'FCL-FCNR B LOAN',
            'LN693'=>'FOREIGN BANK GTEES INVOKE',
            'CA211'=>'CURRENT PLUS',
            'CA212'=>'CURRENT EXCEL',
            'CA213'=>'CURRENT PRIVILEGE',
            'SB112'=>'IPO FINANCE SAVINGS',
            'CA214'=>'IPO FINANCE CURRENT',
            'LN559'=>'LN AGAINST PROPERT Y SBFG',
            'SB113'=>'FREE STYLE SAVINGS ACCOUN',
            'LN536'=>'CONSTRUCTION EQUIPMENT',
            'LN560'=>'FUNDED INTEREST TERM LOAN',
            'SB125'=>'DCB CASH BACK SAVING A/C',
            'CA232'=>'DIAMOND DOLLAR ACCOUNT',
            'LN541'=>'B C PRODUCT PROGRAM',
            'TD314'=>'NRO TAX SAVER QIC',
            'TD313'=>'NRO TAX SAVER RIC',
            'OD426'=>'SME FLEXI',
            'LN561'=>'SME FLEXI',
            'OD444'=>'OD NRI LASSI IP, KVP, IVP',
            'TD331'=>'STAFF SURAKSHA RIC',
            'TD332'=>'STAFF SURAKSHA QIC',
            'TD333'=>'STAFF SURAKSHA MIC',
            'TD268'=>'RES-SHORT-IO TD 1L ND ABV',
            'TD269'=>'RES-SHORT-II TD 1L ND ABV',
            'IB702'=>'DEALER FINANCE',
            'SB111'=>'SB CLASSIC',
            'LN532'=>'NESTLE FRANCHISEE FINANCE',
            'LN585'=>'EQUIPMENT FINANCE SCHEME',
            'IB781'=>'CASUAL INLAND.BP/BD/NEG',
            'TD272'=>'FFD FOR CORPORATE PAYROLL',
            'LN539'=>'AGRI IMPLEMENT NON - EMI',
            'TD274'=>'RES RIC - ANNUAL CALENDAR',
            'SYNDD'=>'CENTRALISED SYNDICATE DD',
            'OD403'=>'PAY LESS CARD',
            'OD404'=>'PAYLESS REVOLVING OD',
            'TD249'=>'BULK SHORT TD - II',
            'TD250'=>'BULK TD RESIDENT RIC',
            'TD247'=>'BULK DEP RES QIC',
            'TD248'=>'BULK DEP RES-MIC',
            'CA233'=>'SECURITY DEPOSIT ACCOUNTS',
            'SB128'=>'PIS NRE',
            'SB130'=>'PIS NRO',
            'TD290'=>'STF-SHORT-IO TD 1L ND ABV',
            'TD291'=>'STF-SHORT-II TD 1L ND ABV',
            'TD311'=>'NRO-SHORT-IO TD 1L ND ABV',
            'TD312'=>'NRO-SHORT-II TD 1L ND ABV',
            'LN529'=>'RETAIL EDUCATION LOAN',
            'OD417'=>'EASY BUSINESS (1)',
            'OD418'=>'EASY BUSINESS (2)',
            'OD412'=>'OD AGAINST GOLD',
            'CC455'=>'SBFG WORKING CAPITAL',
            'LN535'=>'SBFG - WORKING CAPITAL TL',
            'PC992'=>'TRACTOR DEALER TRADE ADV.',
            'TD278'=>'RES QIC -QUARTER CALENDAR',
            'SB110'=>'SSB JUNIOR SAVER',
            'TD270'=>'TD-JUNIOR SAVER',
            'CA209'=>'CORPORATE CHANNEL (DEALER',
            'XL528'=>'SECURITISED PERSONAL LOAN',
            'IB703'=>'IPO - FINANCE',
            'CA215'=>'M-POWER CURRENT ACCOUNT',
            'LN534'=>'COM. VEHICLE FINANCE',
            'LN537'=>'AGRI IMPLEMENT -EMI',
            'LN538'=>'COMM AGRI LOAN - EMI',
            'TD275'=>'QIC - TRIO',
            'TD276'=>'TAX SAVER RIC',
            'TD277'=>'TAX SAVER QIC',
            'SB123'=>'SAVINGS BANK -FCRA (1976)',
            'CA223'=>'CURRENT ACCOUNT-FCRA 1976',
            'CA239'=>'RERA CURRENT A/C',
            'CA210'=>'PERSONAL CURRENT ACCOUNT',
            'TD364'=>'FCNR FD(1 YEAR)',
            'OD413'=>'CORPORATE CLEAN OD',
            'SB120'=>'TRIO BENEFIT  ACCOUNT',
            'TD273'=>'TRIO BENEFIT ACCOUNT',
            'CA216'=>'CCM - CLIENT ACCOUNT',
            'CA217'=>'SETTLEMENT  ACCOUNT',
            'CA218'=>'TRADE -CURRENT ACCOUNT',
            'LN592'=>'SME BACHHAT TERM LOAN',
            'CA228'=>'SME BACHHAT OPERATIVE A/C',
            'TD365'=>'FCNR 6 MONTH IO',
            'SB134'=>'BSBDA - JFS',
            'TD375'=>'FFD - JFS',
            'PC991'=>'CHANNEL FINANCE SCHEME',
            'TD292'=>'RES. SHORT TD 14 DAYS',
            'ZCC51'=>'WRITE-OFF CASH CREDIT',
            'ZOD01'=>'WRITE-OFF OVERDRAFT',
            'SB115'=>'PRIVILEGE BANKING - HNI',
            'SB116'=>'PRIVILEGE BKG - SUPER HNI',
            'SB117'=>'CORPORATE PAYROLL BASIC',
            'SB118'=>'CORPORATE PAYROLL PLUS',
            'TD271'=>'FFD FOR PB AND SUPER PB',
            'SB119'=>'STUDENT ACCOUNT',
            'TD296'=>'NEW 5 MONTH 9 MONTH II',
            'SB121'=>'KISAN MITRA ACCOUNT',
            'SB114'=>'BASIC SB DEPOSIT ACCOUNT1',
            'TD293'=>'RES SHORT TD 14 DAYS PREM',
            'TD294'=>'RES SHORT TD 14 DAYS EXCL',
            'TD295'=>'RES SHORT TD 14 DAYS PRVL',
            'LN533'=>'GOLD LOAN EQUATED',
            'LN530'=>'CORPORATE LOAN',
            'OD414'=>'O/D SHARES-NRE',
            'OD415'=>'O/D SECURED -NRE',
            'CA221'=>'GOLDEN CURRENT ACCOUNT',
            'TD297'=>'RES SHORT TD 14 DAYS GCA',
            'CC456'=>'CROP CASH CREDIT- SHORT',
            'CC457'=>'CROP CASH CREDIT- LONG',
            'TD315'=>'SURAKSHA N RIC',
            'TD316'=>'SURAKSHA N QIC',
            'TD317'=>'SURAKSHA N MIC',
            'ZL527'=>'WRITE-OFF HOME LOANS',
            'ZL528'=>'WRITE-OFF PERSONAL LOANS',
            'ZL529'=>'WRITE-OFF RETAIL OTHERS',
            'ZL553'=>'WRITE-OFF CORP. EMI',
            'ZL551'=>'WRITE-OFF CORP. NON-EMI',
            'LN540'=>'BRANCH ASSETS PER  LOANS',
            'SB124'=>'DCB ELITE SAVINGS BANK AC',
            'CA224'=>'DCB ELITE CURRENT ACCOUNT',
            'TD371'=>'BULK TD-INTER BANK SIMPLE',
            'TD372'=>'BULK TD INTR BANK COMPD',
            'TD373'=>'BULK TD - NFI SIMPLE',
            'TD374'=>'BULK TD-NFI COMPOUNDED',
            'CA237'=>'INSTI PRIME CURRENT',
            'SB136'=>'INSTI PRIME SAVINGS',
            'SB137'=>'DCB SHAURYA SAVING',
            'SB138'=>'DCB SAAHAS SAVING',
            'LN694'=>'IMPORT LC BLS DEVOLVED',
            'TD240'=>'RETAIL TD ANNUAL PAY OUT',
            'TD246'=>'BULK TD ANNUAL PAY OUT',
            'CNHDF'=>'CENTRALISED HDFC DD',
            'CA227'=>'DCB SMARTGAIN CURRENT A/C',
            'OD419'=>'OD AGNST NSC/KVP/IVP/LIP',
            'TD351'=>'NRE FD 6 MONTH IO',
            'OD425'=>'MORTGAGE TOP-UP OD',
            'CA219'=>'NEW CA CLASSIC',
            'CA220'=>'CMS-IW/DW/BTI',
            'CA225'=>'PAYLESS CURRENT',
            'LN590'=>'PAYLESS LOAN',
            'SB133'=>'PMJDY ACCOUNT',
            'OD443'=>'OD NRI LASSI DEBT',
            'TD325'=>'NON CALLABLE RIC',
            'TD326'=>'NON CALLABLE QIC',
            'TD327'=>'NON CALLABLE MIC',
            'TD328'=>'NON CALLABLE IBD RIC',
            'TD329'=>'NON CALLABLE IBD QIC',
            'LN572'=>'GOLD BULET LOAN - AIB',
            'SB122'=>'GOLDEN SAVINGS ACCOUNT',
            'OD422'=>'O/D LASSI-EQUITY',
            'OD423'=>'O/D LASSI-DEBT',
            'OD424'=>'OD LASSI NSC/KVP/IVP/LIP',
            'SB135'=>'WUBS SAVINGS ACCOUNT',
            'CA235'=>'WUBS CURRENT ACCOUNT',
            'OD405'=>'EMPLOYEE PAYLESS CARD',
            'TD279'=>'RES RIC CALENDAR QUARTER',
            'CA230'=>'VOSTRO - EXCHANGE HOUSE',
            'SB132'=>'BASIC SB DEPOSIT ACCOUNT2',
            'CC454'=>'INVOICE DISCOUNTING',
            'TD298'=>'DIAMOND KHUSHIYALI DEP',
            'CC452'=>'AMRB COMMODITY BASED FIN.',
            'CA229'=>'DCB BUSINESS SAVER A/C',
            'SB129'=>'DCB BUSINESS SAVER A/C',
            'CA231'=>'CA CURRENT A/C-ACU VOSTRO',
            'TD350'=>'INTER BANK DEPOSIT -TD',
            'TD318'=>'STAFF TAX SAVER RIC',
            'TD319'=>'STAFF TAX SAVER QIC',
            'SB126'=>'DCB NRE ELITE SAVINGS A/C',
            'SB127'=>'DCB NRO ELITE SAVING A/C',
            'LN591'=>'SUBSIDY RESERVE LOAN',
            'CA226'=>'SUBSIDY CURRENT (AIB)',
            'TD348'=>'BULK TD - QTRLY COMP',
            'OD421'=>'OD TO FARMERS',
            'LN593'=>'WAREHOUSE CONSTRUCTION',
            'OD442'=>'OD NRI LASSI EQUITY',
        ];
    }

	public function productcodes()
	{
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->orderBy('id', 'desc')->paginate(10);
		$data = array();
		$data['productcodes'] = $productCodes;
		return view('apps.' . $app . '.product-codes', array('data' => $data));
	}

	public function getProductCode(Request $request)
	{
		$app = Session::get('appName');

        $product_code = array();
        $product_code = Session::get('_old_input');

        $schm_codes = $this->schm_codes;

		return view('apps.' . $app . '.create-product-code',compact('product_code','schm_codes'));
	}

	public function postProductCode(Request $request)
	{

        $enable = 'N';

        if ($request->enable == 'Y') {
            $enable = 'Y';
        }

        $productCodeModel = ProductCodeModel::where('scheme_code',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
//            ->where('enable',$enable)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Scheme Code Already Exist');
            return back()->withInput(Input::all());
        }

        $currentUser = Session::get('user_id');

        $productCodeModel = new ProductCodeModel();
		$productCodeModel->id = 2;
		$productCodeModel->scheme_code = $request->schemecode;
		$productCodeModel->transfer_type = $request->transfertype;
		$productCodeModel->enable = $enable;
		$productCodeModel->validation = $request->validation;
        $productCodeModel->created_at = date('dMy');
        $productCodeModel->updated_at = date('dMy');
        $productCodeModel->created_by = $currentUser;
        $productCodeModel->updated_by = $currentUser;
		$productCodeModel->save();
		return redirect('product-codes');
	}

	public function getEditProductCode(Request $request) {
		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->get()->toArray();
		$productCodes = array_shift($productCodes);
		$data = array();
		$data['productcodes']['id'] = $productCodes['id'];
		$data['productcodes']['schemecode'] = $productCodes['scheme_code'];
		$data['productcodes']['transfertype'] = $productCodes['transfer_type'];
		$data['productcodes']['enable'] = $productCodes['enable'];
		$data['productcodes']['validation'] = $productCodes['validation'];

        $data['schm_codes'] = $this->schm_codes;


		return view('apps.' . $app . '.edit-product-code', array('data' => $data));
	}

	public function updateProductCode(Request $request) {

        $enable = 'N';

        if ($request->enable == 'Y') {
            $enable = 'Y';
        }

        $productCodeModel = ProductCodeModel::where('scheme_code',$request->schemecode)
            ->where('transfer_type',$request->transfertype)
//            ->where('enable',$enable)
            ->where('validation',$request->validation)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Scheme Code Already Exist');
            return back()->withInput(Input::all());
        }

        $currentUser = Session::get('user_id');

		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->update(['scheme_code' => $request->schemecode, 'transfer_type' => $request->transfertype, 'validation' => $request->validation, 'enable' => $enable, 'updated_at' => date('dMy'), 'updated_by' => $currentUser]);
		return redirect('product-codes');
	}
}
