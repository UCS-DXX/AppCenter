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
            'ASSET'=>'DEPT. ASSETS',
            'CA201'=>'CLASSIC CURRENT ACCOUNT',
            'CA202'=>'PREMIUM CURRENT ACCOUNT',
            'CA203'=>'NRO CURRENT ACCOUNT',
            'CA204'=>'NRE CURRENT ACCOUNT',
            'CA205'=>'RFC(DOMESTIC) CURRENT A/C',
            'CA206'=>'CA-NOTIFIED FIN. INST.',
            'CA207'=>'VOSTRO - BANKS',
            'CA208'=>'EEFC - CURRENT ACCOUNT',
            'CA209'=>'CORPORATE CHANNEL (DEALER',
            'CA210'=>'PERSONAL CURRENT ACCOUNT',
            'CA211'=>'CURRENT PLUS',
            'CA212'=>'CURRENT EXCEL',
            'CA213'=>'CURRENT PRIVILEGE',
            'CA214'=>'IPO FINANCE CURRENT',
            'CA215'=>'M-POWER CURRENT ACCOUNT',
            'CA216'=>'CCM - CLIENT ACCOUNT',
            'CA217'=>'SETTLEMENT  ACCOUNT',
            'CA218'=>'TRADE -CURRENT ACCOUNT',
            'CA219'=>'NEW CA CLASSIC',
            'CA220'=>'CMS-IW/DW/BTI',
            'CA221'=>'GOLDEN CURRENT ACCOUNT',
            'CA223'=>'CURRENT ACCOUNT-FCRA 1976',
            'CA224'=>'DCB ELITE CURRENT ACCOUNT',
            'CA225'=>'PAYLESS CURRENT',
            'CA226'=>'SUBSIDY CURRENT (AIB)',
            'CA227'=>'DCB SMARTGAIN CURRENT A/C',
            'CA228'=>'SME BACHHAT OPERATIVE A/C',
            'CA229'=>'DCB BUSINESS SAVER A/C',
            'CA230'=>'VOSTRO - EXCHANGE HOUSE',
            'CA231'=>'CA CURRENT A/C-ACU VOSTRO',
            'CA232'=>'DIAMOND DOLLAR ACCOUNT',
            'CA233'=>'SECURITY DEPOSIT ACCOUNTS',
            'CA235'=>'WUBS CURRENT ACCOUNT',
            'CA237'=>'INSTI PRIME CURRENT',
            'CA239'=>'RERA CURRENT A/C',
            'CASH'=>'CASH',
            'CC451'=>'GENERAL CASH CREDIT',
            'CC452'=>'AMRB COMMODITY BASED FIN.',
            'CC453'=>'TRADE-CASH CREDIT',
            'CC454'=>'INVOICE DISCOUNTING',
            'CC455'=>'SBFG WORKING CAPITAL',
            'CC456'=>'CROP CASH CREDIT- SHORT',
            'CC457'=>'CROP CASH CREDIT- LONG',
            'CC491'=>'DEM LN COMP - C/C',
            'CC492'=>'FCL-FCNR B LOAN',
            'CNHDF'=>'CENTRALISED HDFC DD',
            'DDCEN'=>'CENTRALISED DD',
            'DDHDF'=>'HDFC DD',
            'DDPAY'=>'DD PAYABLE',
            'DDREG'=>'DD REGULAR',
            'EXPEN'=>'DEPT. EXPENSES',
            'FB801'=>'FRG. BILLS PUR/DIS/NEG/RA',
            'FB802'=>'EXP BLS DISCOUNTED-EBRD',
            'FB803'=>'IMP L/C BLS DEVOLVED',
            'HOACC'=>'HEAD OFFICE ACCOUNT',
            'HOACP'=>'PARKING HEAD OFFICE ACC',
            'IB701'=>'INLD BILLS PURCH/DISC/NEG',
            'IB702'=>'DEALER FINANCE',
            'IB703'=>'IPO - FINANCE',
            'IB711'=>'O/D AGNST BILLS PURC/DISC',
            'IB781'=>'CASUAL INLAND.BP/BD/NEG',
            'INCOM'=>'DEPT. INCOME',
            'LIABT'=>'DEPT. LIABILITIES',
            'LN501'=>'UNSECURED LOANS',
            'LN502'=>'SMW- LOANS',
            'LN503'=>'TDR LOANS',
            'LN504'=>'TDR-NRE LOANS',
            'LN505'=>'TDR-NRO LOANS',
            'LN506'=>'FCNR TD-RUPEE LOANS',
            'LN526'=>'HOUSING LOANS',
            'LN527'=>'HOME LOANS',
            'LN528'=>'PERSONAL LOANS',
            'LN529'=>'RETAIL EDUCATION LOAN',
            'LN530'=>'CORPORATE LOAN',
            'LN531'=>'CAR LOANS',
            'LN532'=>'NESTLE FRANCHISEE FINANCE',
            'LN533'=>'GOLD LOAN EQUATED',
            'LN534'=>'COM. VEHICLE FINANCE',
            'LN535'=>'SBFG - WORKING CAPITAL TL',
            'LN536'=>'CONSTRUCTION EQUIPMENT',
            'LN537'=>'AGRI IMPLEMENT -EMI',
            'LN538'=>'COMM AGRI LOAN - EMI',
            'LN539'=>'AGRI IMPLEMENT NON - EMI',
            'LN540'=>'BRANCH ASSETS PER  LOANS',
            'LN541'=>'B C PRODUCT PROGRAM',
            'LN551'=>'OTH.SECURED LOANS-EQUAL I',
            'LN552'=>'WCT LOANS',
            'LN553'=>'OTH.SECURED LOAN-EQTD INS',
            'LN554'=>'EDUCATIONAL LOANS',
            'LN555'=>'GOLD LOANS',
            'LN556'=>'LN AGNST NSC/KVP/IVP/LIP',
            'LN557'=>'SHARES/DEB. LOANS',
            'LN558'=>'CORPORATE MIBOR LNKD LNS',
            'LN559'=>'LN AGAINST PROPERT Y SBFG',
            'LN560'=>'FUNDED INTEREST TERM LOAN',
            'LN561'=>'SME FLEXI',
            'LN571'=>'CROP LOAN - AIB',
            'LN572'=>'GOLD BULET LOAN - AIB',
            'LN585'=>'EQUIPMENT FINANCE SCHEME',
            'LN590'=>'PAYLESS LOAN',
            'LN591'=>'SUBSIDY RESERVE LOAN',
            'LN592'=>'SME BACHHAT TERM LOAN',
            'LN593'=>'WAREHOUSE CONSTRUCTION',
            'LN621'=>'STF.BETTER LIVING LOANS',
            'LN622'=>'STF. VEHICLE LOANS',
            'LN623'=>'STF. PERSONAL LOANS',
            'LN631'=>'STF. HSG. LOAN-EQUATED',
            'LN632'=>'STF.HSG. LOANS-EQUAL',
            'LN633'=>'STF.LOANS-HOUSE RENOVAT.',
            'LN691'=>'INLAND BANK GTEES INVOKED',
            'LN692'=>'INLAND L/CS DEVOLVED',
            'LN693'=>'FOREIGN BANK GTEES INVOKE',
            'LN694'=>'IMPORT LC BLS DEVOLVED',
            'OAPCE'=>'OAP CREDIT EXACT POINTING',
            'OAPCR'=>'OAP CREDIT POINTING',
            'OAPDE'=>'OAP DEBIT EXACT POINTING',
            'OAPDR'=>'OAP DEBIT POINTING',
            'OD401'=>'O/D SMART CREDIT',
            'OD402'=>'O/D TDR RESIDENT',
            'OD403'=>'PAY LESS CARD',
            'OD404'=>'PAYLESS REVOLVING OD',
            'OD405'=>'EMPLOYEE PAYLESS CARD',
            'OD406'=>'O/D TDR NRE',
            'OD407'=>'O/D TDR NRO',
            'OD411'=>'O/D SHARES',
            'OD412'=>'OD AGAINST GOLD',
            'OD413'=>'CORPORATE CLEAN OD',
            'OD414'=>'O/D SHARES-NRE',
            'OD415'=>'O/D SECURED -NRE',
            'OD416'=>'O/D OTH SECURED',
            'OD417'=>'EASY BUSINESS (1)',
            'OD418'=>'EASY BUSINESS (2)',
            'OD419'=>'OD AGNST NSC/KVP/IVP/LIP',
            'OD421'=>'OD TO FARMERS',
            'OD422'=>'O/D LASSI-EQUITY',
            'OD423'=>'O/D LASSI-DEBT',
            'OD424'=>'OD LASSI NSC/KVP/IVP/LIP',
            'OD425'=>'MORTGAGE TOP-UP OD',
            'OD426'=>'SME FLEXI',
            'OD442'=>'OD NRI LASSI EQUITY',
            'OD443'=>'OD NRI LASSI DEBT',
            'OD444'=>'OD NRI LASSI IP, KVP, IVP',
            'OTASS'=>'OTHER ASSETS',
            'OTEXP'=>'OTHER EXPENSES',
            'OTHER'=>'OTHER OFFICE ACCOUNTS',
            'OTINC'=>'OTHER INCOME',
            'OTLBT'=>'OTHER LIABILITIES',
            'PC901'=>'PACKING CREDITS- RUPEE',
            'PC902'=>'PACKING CREDITS - PCFC',
            'PC991'=>'CHANNEL FINANCE SCHEME',
            'PC992'=>'TRACTOR DEALER TRADE ADV.',
            'PO'=>'PAY ORDERS',
            'PROV'=>'PROVISIONS/CONTINGENCIES',
            'PROXY'=>'PROXY ACCOUNTS',
            'SB101'=>'CLASSIC - SAVINGS BANK',
            'SB102'=>'DCB SHUBH-LABH SB',
            'SB103'=>'FAMILY - SAVINGS BANK',
            'SB104'=>'BENEFIT - SAVINGS BANK',
            'SB105'=>'GOLD MORTGAGES-SAVINGS BK',
            'SB106'=>'STAFF - SAVINGS BANK',
            'SB107'=>'NRO - SAVINGS BANK',
            'SB108'=>'NRE - SAVINGS BANK',
            'SB109'=>'SB MAX',
            'SB110'=>'SSB JUNIOR SAVER',
            'SB111'=>'SB CLASSIC',
            'SB112'=>'IPO FINANCE SAVINGS',
            'SB113'=>'FREE STYLE SAVINGS ACCOUN',
            'SB114'=>'BASIC SB DEPOSIT ACCOUNT1',
            'SB115'=>'PRIVILEGE BANKING - HNI',
            'SB116'=>'PRIVILEGE BKG - SUPER HNI',
            'SB117'=>'CORPORATE PAYROLL BASIC',
            'SB118'=>'CORPORATE PAYROLL PLUS',
            'SB119'=>'STUDENT ACCOUNT',
            'SB120'=>'TRIO BENEFIT  ACCOUNT',
            'SB121'=>'KISAN MITRA ACCOUNT',
            'SB122'=>'GOLDEN SAVINGS ACCOUNT',
            'SB123'=>'SAVINGS BANK -FCRA (1976)',
            'SB124'=>'DCB ELITE SAVINGS BANK AC',
            'SB125'=>'DCB CASH BACK SAVING A/C',
            'SB126'=>'DCB NRE ELITE SAVINGS A/C',
            'SB127'=>'DCB NRO ELITE SAVING A/C',
            'SB128'=>'PIS NRE',
            'SB129'=>'DCB BUSINESS SAVER A/C',
            'SB130'=>'PIS NRO',
            'SB132'=>'BASIC SB DEPOSIT ACCOUNT2',
            'SB133'=>'PMJDY ACCOUNT',
            'SB134'=>'BSBDA - JFS',
            'SB135'=>'WUBS SAVINGS ACCOUNT',
            'SB136'=>'INSTI PRIME SAVINGS',
            'SB137'=>'DCB SHAURYA SAVING',
            'SB138'=>'DCB SAAHAS SAVING',
            'SYNDD'=>'CENTRALISED SYNDICATE DD',
            'TD240'=>'RETAIL TD ANNUAL PAY OUT',
            'TD246'=>'BULK TD ANNUAL PAY OUT',
            'TD247'=>'BULK DEP RES QIC',
            'TD248'=>'BULK DEP RES-MIC',
            'TD249'=>'BULK SHORT TD - II',
            'TD250'=>'BULK TD RESIDENT RIC',
            'TD251'=>'RESIDENT FIXED DEPOSIT',
            'TD252'=>'RESIDENT RIC',
            'TD253'=>'RESIDENT QIC',
            'TD254'=>'RESIDENT MIC',
            'TD255'=>'RESIDENT RD',
            'TD256'=>'OTHER-CERTIFICATE OF DEP',
            'TD257'=>'RESIDENT AUTO RENEWAL DEP',
            'TD258'=>'NOTIFIED FIN. INST.- FD',
            'TD259'=>'INTER BANK FIXED DEPOSIT',
            'TD260'=>'INTER BANK DEPOSIT RIC',
            'TD261'=>'BANK-CERTIFICATE OF DEP',
            'TD262'=>'NFI-CERTIFICATE OF DEP',
            'TD263'=>'RES. SHORT TD - IO',
            'TD264'=>'RES. SHORT TD - II',
            'TD265'=>'RES-SHORT-IO TD 15L N ABV',
            'TD266'=>'RES-SHORT-II TD15L ND ABV',
            'TD267'=>'RES-II 180 DYS ND ABV TD',
            'TD268'=>'RES-SHORT-IO TD 1L ND ABV',
            'TD269'=>'RES-SHORT-II TD 1L ND ABV',
            'TD270'=>'TD-JUNIOR SAVER',
            'TD271'=>'FFD FOR PB AND SUPER PB',
            'TD272'=>'FFD FOR CORPORATE PAYROLL',
            'TD273'=>'TRIO BENEFIT ACCOUNT',
            'TD274'=>'RES RIC - ANNUAL CALENDAR',
            'TD275'=>'QIC - TRIO',
            'TD276'=>'TAX SAVER RIC',
            'TD277'=>'TAX SAVER QIC',
            'TD278'=>'RES QIC -QUARTER CALENDAR',
            'TD279'=>'RES RIC CALENDAR QUARTER',
            'TD281'=>'STAFF FIXED DEPOSIT',
            'TD282'=>'STAFF RIC',
            'TD283'=>'STAFF QIC',
            'TD284'=>'STAFF MIC',
            'TD285'=>'STAFF RD',
            'TD286'=>'STAFF AUTO RENEWAL DEP',
            'TD287'=>'STAFF-SHORT TD - IO',
            'TD288'=>'STAFF-SHORT TD - II',
            'TD289'=>'STAF-II 180 DYS ND ABV TD',
            'TD290'=>'STF-SHORT-IO TD 1L ND ABV',
            'TD291'=>'STF-SHORT-II TD 1L ND ABV',
            'TD292'=>'RES. SHORT TD 14 DAYS',
            'TD293'=>'RES SHORT TD 14 DAYS PREM',
            'TD294'=>'RES SHORT TD 14 DAYS EXCL',
            'TD295'=>'RES SHORT TD 14 DAYS PRVL',
            'TD296'=>'NEW 5 MONTH 9 MONTH II',
            'TD297'=>'RES SHORT TD 14 DAYS GCA',
            'TD298'=>'DIAMOND KHUSHIYALI DEP',
            'TD301'=>'NRO FIXED DEPOSIT',
            'TD302'=>'NRO RIC',
            'TD303'=>'NRO QIC',
            'TD304'=>'NRO MIC',
            'TD305'=>'NRO RD',
            'TD306'=>'NRO SHORT TD - IO',
            'TD307'=>'NRO SHORT TD - II',
            'TD308'=>'NRO-SHORT-IO TD15L ND ABV',
            'TD309'=>'NRO-SHORT-II TD15L ND ABV',
            'TD310'=>'NRO-II 180 DYS ND ABV TD',
            'TD311'=>'NRO-SHORT-IO TD 1L ND ABV',
            'TD312'=>'NRO-SHORT-II TD 1L ND ABV',
            'TD313'=>'NRO TAX SAVER RIC',
            'TD314'=>'NRO TAX SAVER QIC',
            'TD315'=>'SURAKSHA N RIC',
            'TD316'=>'SURAKSHA N QIC',
            'TD317'=>'SURAKSHA N MIC',
            'TD318'=>'STAFF TAX SAVER RIC',
            'TD319'=>'STAFF TAX SAVER QIC',
            'TD321'=>'NRNR FIXED DEPOSIT',
            'TD322'=>'NRNR RIC',
            'TD323'=>'NRNR QIC',
            'TD324'=>'NRNR MIC',
            'TD325'=>'NON CALLABLE RIC',
            'TD326'=>'NON CALLABLE QIC',
            'TD327'=>'NON CALLABLE MIC',
            'TD328'=>'NON CALLABLE IBD RIC',
            'TD329'=>'NON CALLABLE IBD QIC',
            'TD331'=>'STAFF SURAKSHA RIC',
            'TD332'=>'STAFF SURAKSHA QIC',
            'TD333'=>'STAFF SURAKSHA MIC',
            'TD341'=>'NRE FIXED DEPOSIT',
            'TD342'=>'NRE RIC',
            'TD343'=>'NRE QIC',
            'TD344'=>'NRE MIC',
            'TD345'=>'NRE PRAGATI',
            'TD346'=>'NRE 180 DYS ND ABV TD',
            'TD348'=>'BULK TD - QTRLY COMP',
            'TD350'=>'INTER BANK DEPOSIT -TD',
            'TD351'=>'NRE FD 6 MONTH IO',
            'TD361'=>'FCNR FD(MORE THAN 1 YEAR)',
            'TD362'=>'FCNR FD(1 YEAR)',
            'TD363'=>'FCNR RIC',
            'TD364'=>'FCNR FD(1 YEAR)',
            'TD365'=>'FCNR 6 MONTH IO',
            'TD371'=>'BULK TD-INTER BANK SIMPLE',
            'TD372'=>'BULK TD INTR BANK COMPD',
            'TD373'=>'BULK TD - NFI SIMPLE',
            'TD374'=>'BULK TD-NFI COMPOUNDED',
            'TD375'=>'FFD - JFS',
            'XL528'=>'SECURITISED PERSONAL LOAN',
            'ZCC51'=>'WRITE-OFF CASH CREDIT',
            'ZEROB'=>'ZERO BALANCE ACCOUNTS',
            'ZL527'=>'WRITE-OFF HOME LOANS',
            'ZL528'=>'WRITE-OFF PERSONAL LOANS',
            'ZL529'=>'WRITE-OFF RETAIL OTHERS',
            'ZL551'=>'WRITE-OFF CORP. NON-EMI',
            'ZL553'=>'WRITE-OFF CORP. EMI',
            'ZOD01'=>'WRITE-OFF OVERDRAFT'
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
        $productCodeModel->created_at = date('dMy H:i:s');
        $productCodeModel->updated_at = date('dMy H:i:s');
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
            ->where('id', "<>", $request->id)
            ->get()->toArray();

        if(!empty($productCodeModel)){
            Session::flash('err_msg','Scheme Code Already Exist');
            return back()->withInput(Input::all());
        }

        $currentUser = Session::get('user_id');

		$app = Session::get('appName');
		$productCodeModel = new ProductCodeModel();
		$productCodes = $productCodeModel->where('id', $request->id)->update(['scheme_code' => $request->schemecode, 'transfer_type' => $request->transfertype, 'validation' => $request->validation, 'enable' => $enable, 'updated_at' => date('dMy H:i:s'), 'updated_by' => $currentUser]);
		return redirect('product-codes');
	}
}
